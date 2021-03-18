# JavaScipt function expressions for calculating volumes of 3-D shapes. 

import math

# Sphere. V = (4/3) × π × r3 
def sphere_volume(radius):
  radius_cubed = radius ** 3
  return 4/3 * math.pi * radius_cubed


# Cone.  V = 1/3 × π × r2 × h
def cone_volume(radius, height): 
    return (1.0/3) * math.pi * radius * radius * height


# Cylinder. V = π x r2 x h
def cylinder_volume(radius, height): 
    return math.pi * radius * radius * height
  

# Cube. V= s3
def cube_volume(side): 
    return side * side * side

  
# Cuboid. V = l x h x w
def cuboid_volume(length, height, width): 
    return length * height * width
  
  
# Square Pyramid. V = 1/3 x b2 x h
def square_pyramid_volume(base, height):
  return (1.0/3) * base * base * height
