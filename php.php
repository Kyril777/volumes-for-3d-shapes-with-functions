/* PHP functions for calculating volumes of 3-D shapes. */

/* Sphere. V = (4/3) × π × r3  */
function sphere_volume($radius) {
	$radius_cubed = pow($radius, 3);
	return 4/3 * pi() * $radius_cubed;
}


/* Cone.  V = 1/3 × π × r2 × h. */
function cone_volume($radius, $height) {
	$radius_squared = pow($radius, 2);
	return 1/3 * pi() * $radius_squared * $height;
}


/* Cylinder. V = π x r2 x h. */
function cylinder_volume($radius, $height) {
	$radius_squared = pow($radius, 2);
	return pi() * $radius_squared * $height;
}


/* Cube. V = S3. */
function cube_volume($side) {
	return pow($radius, 3);
}


/* Cuboid. V = l x h x w. */
function cuboid_volume($length, $height, $width) {
	return $length * $height * $width;
}


/* Square Pyramid. V = 1/3 x b2 x h. */
function square_pyramid_volume($base, $height) {
	$base_squared = pow($base, 2);
	return 1/3 * $base_squared * $height;
}


/* Triangular Prism. V = 1/2 * apothem * base * height. */
function triangular_prism_volume($apothem, $base, $height){
    return ($apothem * $base)/2  * $height;
}
