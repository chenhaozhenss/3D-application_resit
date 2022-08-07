document.write('<script src="../js/three.js" type="text/javascript"></script>');
document.write('<script src="../js/OrbitControls.js" type="text/javascript"></script>');

let camera, scene, renderer,controls;
let earth, cloud;
let clock = new THREE.Clock();
const textureLoader = new THREE.TextureLoader();

function init() {
    const EARTH_RADIUS = 2.5;
    camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.1, 200);
    camera.position.set(7, 0, 0);
    camera.lookAt(0,0,0)

    scene = new THREE.Scene();
    const dirLight = new THREE.PointLight(0xffffff);
    dirLight.position.set(0, 0, 10);
    dirLight.intensity = 2;
    dirLight.castShadow = false;
    scene.add(dirLight)
    const aLight = new THREE.AmbientLight(0xffffff)
    aLight.intensity =1
    scene.add(aLight)
    renderer = new THREE.WebGLRenderer({canvas: document.getElementById('earth'),
        alpha: true
    });
    const earthGeometry = new THREE.SphereGeometry(EARTH_RADIUS, 100, 16);
    const earthMaterial = new THREE.MeshPhongMaterial({
        map: textureLoader.load('assets/earthImage/earth.jpg'),
        normalMap: textureLoader.load('../assets/earthImage/earth_normal_2048.jpg'),
        emissiveMap: textureLoader.load('../assets/earthImage/earth_lights_2048.png'),
        emissive:0xf8c73f
    })
    earth = new THREE.Mesh(earthGeometry,earthMaterial)
    earth.receiveShadow=true;
    scene.add(earth)
    earth.position.set(0,0,0)
    const cloudGeometry = new THREE.SphereGeometry(2.6,100,16)
    const cloudMaterial = new THREE.MeshPhongMaterial({
        map:textureLoader.load('../assets/earthImage/earth_clouds_2048.png'),
        transparent:true,
        opacity:0.8
    })
    cloud = new THREE.Mesh(cloudGeometry,cloudMaterial);
    cloud.receiveShadow=true;
    cloud.castShadow=true;
    earth.add(cloud);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth/1.6,window.innerHeight/1.6)
    renderer.shadowMap.enabled = true;
    controls = new THREE.OrbitControls(camera, renderer.domElement)
    controls.enableZoom=false;
    animate();
}


function animate() {
    earth.rotation.y +=0.005;
    renderer.render(scene, camera)
    controls.update();
    requestAnimationFrame(animate);
    }



window.onresize = function () {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.update();
    renderer.setSize(window.innerWidth,window.innerHeight)
}

