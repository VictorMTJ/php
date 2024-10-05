
<?php

$estudiantes = array('carlos','jose','maria','luis');

echo "<pre>";

// var_dump($estudiantes);

print_r($estudiantes);

echo "<pre>";

echo $estudiantes[2];

$instructor = [
  'nombre' =>'victor',
  'apellido' => 'tarazona',
  'edad' => 18,
  'deudas' => '74.000'
];
echo"<pre>";
print_r($instructor);
echo "<pre";


$tutor = [
  'nombre' => 'jhon',
  'apellido' => 'becerra',
  'edad' => 38,
  'direccion' => [
    'ciudad' => 'bucaramanga',
    'barrio' => 'san francisco',
    'nomeclatura' => 'crr 25 No 18-65',
    'zipcode' => 666566
  ],
  'habilidades' => [
    'git', 'html', 'css', 'js', 'php', 'phythn', 'sql'
  ]
];

echo "<pre>";
print_r($tutor);
echo "<pre>";

echo "<pre>";
print_r($tutor['direccion']['nomeclatura']);
echo "<pre>";

echo "<pre>";
print_r($tutor['habilidades']);
echo "<pre>";


$tutor['habilidades'][3] = 'JavaScript';
$tutor['direccion']['departamento'] = 'Santander';


arra_splice($tutor('habilidades'), 4, );

echo_count($tutor("habilidades"));