/* JavaScipt function expressions for calculating volumes of 3-D shapes. */

/* Sphere. V = (4/3) × π × r3  */
const sphereVolume = (radius) => {
    let radiusCubed = Math.pow(radius, 3);
    return 4/3 * Math.PI  * radiusCubed;
}


/* Cone.  V = 1/3 × π × r2 × h. */
const coneVolume = (radius, height) => {
    let radiusSquared = Math.pow(radius, 2);
    return 1/3 * Math.PI * radiusSquared * height;
}

/* Cylinder. V = π x r2 x h. */
const cylinderVolume = (radius, height) => {
    let radiusSquared = Math.pow(radius, 2);
    return Math.PI * radiusSquared * height;
}


/* Cube. V = S3. */
const cubeVolume = (side) => {
    let sideCubed = Math.pow(side, 3);
    return sideCubed;
}


/* Cuboid. V = l x h x w. */
const cuboidVolume = (length, height, width) => {
    return length * height * width;
}

/* Square Pyramid. V = 1/3 x b2 x h. */
const squarePyramidVolume = (base, height) => {
    let baseSquared = Math.pow(base, 2);
    return 1/3 * baseSquared * height;
}

