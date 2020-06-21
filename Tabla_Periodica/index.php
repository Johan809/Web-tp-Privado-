<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>Tabla Periodica</title>
</head>
<?php 
    
    //Las validaciones funcionan si una key(numeros) esta vacia.
    //Por ejemplo: 2=> '', #Ahi se activaria la validacion
    
    $elementos = [
        1 => ['simbolo'=>'H', 'nombre'=>'Hidrogeno','grupo'=>'otros no metales'],
        2 => ['simbolo'=>'He', 'nombre'=>'Helio','grupo'=>'gases nobles'],
        3 => ['simbolo'=>'Li', 'nombre'=>'Litio','grupo'=>'alcalinos'],
        4 => ['simbolo'=>'Be', 'nombre'=>'Berilio','grupo'=>'alcalinoterreos'],
        5 => ['simbolo'=>'B', 'nombre'=>'Boro','grupo'=>'metaloides'],
        6 => ['simbolo'=>'C', 'nombre'=>'Carbono','grupo'=>'otros no metales'],
        7 => ['simbolo'=>'N', 'nombre'=>'Nitrogeno','grupo'=>'otros no metales'],
        8 => ['simbolo'=>'O', 'nombre'=>'Oxigeno','grupo'=>'otros no metales'],
        9 => ['simbolo'=>'F', 'nombre'=>'Fluor','grupo'=>'halogenos'],
        10 => ['simbolo'=>'Ne', 'nombre'=>'Neon','grupo'=>'gases nobles'],
        11 => ['simbolo'=>'Na', 'nombre'=>'Sodio','grupo'=>'alcalinos'],
        12 => ['simbolo'=>'Mg', 'nombre'=>'Magnesio','grupo'=>'alcalinoterreos'],
        13 => ['simbolo'=>'Al', 'nombre'=>'Aluminio','grupo'=>'otros metales'],
        14 => ['simbolo'=>'Si', 'nombre'=>'Silicio','grupo'=>'metaloides'],
        15 => ['simbolo'=>'P', 'nombre'=>'Fosforo','grupo'=>'otros no metales'],
        16 => ['simbolo'=>'S', 'nombre'=>'Azufre','grupo'=>'otros no metales'],
        17 => ['simbolo'=>'Cl', 'nombre'=>'Cloro','grupo'=>'halogenos'],
        18 => ['simbolo'=>'Ar', 'nombre'=>'Argon','grupo'=>'gases nobles'],
        19 => ['simbolo'=>'K', 'nombre'=>'Potasio','grupo'=>'alcalinos'],
        20 => ['simbolo'=>'Ca', 'nombre'=>'Calcio','grupo'=>'alcalinoterreos'],
        21 => ['simbolo'=>'Sc', 'nombre'=>'Escandio','grupo'=>'metales de transicion'],
        22 => ['simbolo'=>'Ti', 'nombre'=>'Titanio','grupo'=>'metales de transicion'],
        23 => ['simbolo'=>'V', 'nombre'=>'Vanadio','grupo'=>'metales de transicion'],
        24 => ['simbolo'=>'Cr', 'nombre'=>'Cromo','grupo'=>'metales de transicion'],
        25 => ['simbolo'=>'Mn', 'nombre'=>'Manganeso','grupo'=>'metales de transicion'],
        26 => ['simbolo'=>'Fe', 'nombre'=>'Hierro','grupo'=>'metales de transicion'],
        27 => ['simbolo'=>'Co', 'nombre'=>'Cobalto','grupo'=>'metales de transicion'],
        28 => ['simbolo'=>'Ni', 'nombre'=>'Niquel','grupo'=>'metales de transicion'],
        29 => ['simbolo'=>'Cu', 'nombre'=>'Cobre','grupo'=>'metales de transicion'],
        30 => ['simbolo'=>'Zn', 'nombre'=>'Zinc','grupo'=>'metales de transicion'],
        31 => ['simbolo'=>'Ga', 'nombre'=>'Galio','grupo'=>'otros metales'],
        32 => ['simbolo'=>'Ge', 'nombre'=>'Germanio','grupo'=>'metaloides'],
        33 => ['simbolo'=>'As', 'nombre'=>'Arsenico','grupo'=>'metaloides'],
        34 => ['simbolo'=>'Se', 'nombre'=>'Selenio','grupo'=>'otros no metales'],
        35 => ['simbolo'=>'Br', 'nombre'=>'Bromo','grupo'=>'halogenos'],
        36 => ['simbolo'=>'kr', 'nombre'=>'Kripton','grupo'=>'gases nobles'],
        37 => ['simbolo'=>'Rb', 'nombre'=>'Rubidio','grupo'=>'alcalinos'],
        38 => ['simbolo'=>'Sr', 'nombre'=>'Estroncio','grupo'=>'alcalinoterreos'],
        39 => ['simbolo'=>'Y', 'nombre'=>'Itrio','grupo'=>'metales de transicion'],
        40 => ['simbolo'=>'Zr', 'nombre'=>'Circonio','grupo'=>'metales de transicion'],
        41 => ['simbolo'=>'Nb', 'nombre'=>'Niobio','grupo'=>'metales de transicion'],
        42 => ['simbolo'=>'Mo', 'nombre'=>'Molibdeno','grupo'=>'metales de transicion'],
        43 => ['simbolo'=>'Tc', 'nombre'=>'Tecnecio','grupo'=>'metales de transicion'],
        44 => ['simbolo'=>'Ru', 'nombre'=>'Rutenio','grupo'=>'metales de transicion'],
        45 => ['simbolo'=>'Rh', 'nombre'=>'Rodio','grupo'=>'metales de transicion'],
        46 => ['simbolo'=>'Pd', 'nombre'=>'Paladio','grupo'=>'metales de transicion'],
        47 => ['simbolo'=>'Ag', 'nombre'=>'Plata','grupo'=>'metales de transicion'],
        48 => ['simbolo'=>'Cd', 'nombre'=>'Cadmio','grupo'=>'metales de transicion'],
        49 => ['simbolo'=>'In', 'nombre'=>'Indio','grupo'=>'otros metales'],
        50 => ['simbolo'=>'Sn', 'nombre'=>'Estaño','grupo'=>'otros metales'],
        51 => ['simbolo'=>'Sb', 'nombre'=>'Antimonio','grupo'=>'metaloides'],
        52 => ['simbolo'=>'Te', 'nombre'=>'Telurio','grupo'=>'metaloides'],
        53 => ['simbolo'=>'I', 'nombre'=>'Yodo','grupo'=>'halogenos'],
        54 => ['simbolo'=>'Xe', 'nombre'=>'Xenon','grupo'=>'gases nobles'],
        55 => ['simbolo'=>'Cs', 'nombre'=>'Cesio','grupo'=>'alcalinos'],
        56 => ['simbolo'=>'Ba', 'nombre'=>'Bario','grupo'=>'alcalinoterreos'],
        57 => ['simbolo'=>'Lac', 'grupo'=>'lantanidos'], #Seccion para los lantanidos
        58 => ['simbolo'=>'Hf', 'nombre'=>'Hafnio','grupo'=>'metales de transicion'],
        59 => ['simbolo'=>'Ta', 'nombre'=>'Tantalo','grupo'=>'metales de transicion'],
        60 => ['simbolo'=>'W', 'nombre'=>'Wolframio','grupo'=>'metales de transicion'],
        61 => ['simbolo'=>'Re', 'nombre'=>'Renio','grupo'=>'metales de transicion'],
        62 => ['simbolo'=>'Os', 'nombre'=>'Osmio','grupo'=>'metales de transicion'],
        63 => ['simbolo'=>'Ir', 'nombre'=>'Iridio','grupo'=>'metales de transicion'],
        64 => ['simbolo'=>'Pt', 'nombre'=>'Platinio','grupo'=>'metales de transicion'],
        65 => ['simbolo'=>'Au', 'nombre'=>'Oro','grupo'=>'metales de transicion'],
        66 => ['simbolo'=>'Hg', 'nombre'=>'Mercurio','grupo'=>'metales de transicion'],
        67 => ['simbolo'=>'Tl', 'nombre'=>'Talio','grupo'=>'otros metales'],
        68 => ['simbolo'=>'Pb', 'nombre'=>'Plomo','grupo'=>'otros metales'],
        69 => ['simbolo'=>'Bi', 'nombre'=>'Bismuto','grupo'=>'otros metales'],
        70 => ['simbolo'=>'Po', 'nombre'=>'Polonio','grupo'=>'metaloides'],
        71 => ['simbolo'=>'At', 'nombre'=>'Astato','grupo'=>'halogenos'],
        72 => ['simbolo'=>'Rn', 'nombre'=>'Radon','grupo'=>'gases nobles'],
        73 => ['simbolo'=>'Fr', 'nombre'=>'Francio','grupo'=>'alcalinos'],
        74 => ['simbolo'=>'Ra', 'nombre'=>'Radio','grupo'=>'alcalinoterreos'],
        75 => ['simbolo'=>'Act', 'grupo'=>'actinidos'], #Seccion para los actinidos
        76 => ['simbolo'=>'Rf', 'nombre'=>'Rutherfordio','grupo'=>'metales de transicion'],
        77 => ['simbolo'=>'Db', 'nombre'=>'Dubnio','grupo'=>'metales de transicion'],
        78 => ['simbolo'=>'Sg', 'nombre'=>'Seaborgio','grupo'=>'metales de transicion'],
        79 => ['simbolo'=>'Bh', 'nombre'=>'Bohrio','grupo'=>'metales de transicion'],
        80 => ['simbolo'=>'Hs', 'nombre'=>'Hasio','grupo'=>'metales de transicion'],
        81 => ['simbolo'=>'Mt', 'nombre'=>'Meitnerio','grupo'=>'metales de transicion'],
        82 => ['simbolo'=>'Ds', 'nombre'=>'Darmstatio','grupo'=>'metales de transicion'],
        83 => ['simbolo'=>'Rg', 'nombre'=>'Roentgenio','grupo'=>'metales de transicion'],
        84 => ['simbolo'=>'Cn', 'nombre'=>'Copernicio','grupo'=>'metales de transicion'],
        85 => ['simbolo'=>'Nh', 'nombre'=>'Nihonio','grupo'=>'otros metales'],
        86 => ['simbolo'=>'Fl', 'nombre'=>'Flerovio','grupo'=>'otros metales'],
        87 => ['simbolo'=>'Mc', 'nombre'=>'Moscovio','grupo'=>'otros metales'],
        88 => ['simbolo'=>'Lv', 'nombre'=>'Livermorio','grupo'=>'otros metales'],
        89 => ['simbolo'=>'Ts', 'nombre'=>'Teneso','grupo'=>'halogenos'],
        90 => ['simbolo'=>'Og', 'nombre'=>'Oganeson','grupo'=>'gases nobles']
    ];

    $elemGrupoF = [
        1 => ['simbolo'=>'La', 'nombre'=>'Lantano','grupo'=>'lantanidos'],
        2 => ['simbolo'=>'Ce', 'nombre'=>'Cerio','grupo'=>'lantanidos'],
        3 => ['simbolo'=>'Pr', 'nombre'=>'Praseodimio','grupo'=>'lantanidos'],
        4 => ['simbolo'=>'Nd', 'nombre'=>'Neodimio','grupo'=>'lantanidos'],
        5 => ['simbolo'=>'Pm', 'nombre'=>'Prometio','grupo'=>'lantanidos'],
        6 => ['simbolo'=>'Sm', 'nombre'=>'Samario','grupo'=>'lantanidos'],
        7 => ['simbolo'=>'Eu', 'nombre'=>'Europio','grupo'=>'lantanidos'],
        8 => ['simbolo'=>'Gd', 'nombre'=>'Gadolinio','grupo'=>'lantanidos'],
        9 => ['simbolo'=>'Tb', 'nombre'=>'Terbio','grupo'=>'lantanidos'],
        10 => ['simbolo'=>'Dy', 'nombre'=>'Disprosio','grupo'=>'lantanidos'],
        11 => ['simbolo'=>'Ho', 'nombre'=>'Holmio','grupo'=>'lantanidos'],
        12 => ['simbolo'=>'Er', 'nombre'=>'Erbio','grupo'=>'lantanidos'],
        13 => ['simbolo'=>'Tm', 'nombre'=>'Tulio','grupo'=>'lantanidos'],
        14 => ['simbolo'=>'Yb', 'nombre'=>'Iterbio','grupo'=>'lantanidos'],
        15 => ['simbolo'=>'Lu', 'nombre'=>'Lutecio','grupo'=>'lantanidos'],
        16 => ['simbolo'=>'Ac', 'nombre'=>'Actinio','grupo'=>'actinidos'],
        17 => ['simbolo'=>'Th', 'nombre'=>'Torio','grupo'=>'actinidos'],
        18 => ['simbolo'=>'Pa', 'nombre'=>'Protactinio','grupo'=>'actinidos'],
        19 => ['simbolo'=>'U', 'nombre'=>'Uranio','grupo'=>'actinidos'],
        20 => ['simbolo'=>'Np', 'nombre'=>'Neptunio','grupo'=>'actinidos'],
        21 => ['simbolo'=>'Pu', 'nombre'=>'Plutonio','grupo'=>'actinidos'],
        22 => ['simbolo'=>'Am', 'nombre'=>'Americio','grupo'=>'actinidos'],
        23 => ['simbolo'=>'Cm', 'nombre'=>'Curio','grupo'=>'actinidos'],
        24 => ['simbolo'=>'Bk', 'nombre'=>'Berkelio','grupo'=>'actinidos'],
        25 => ['simbolo'=>'Cf', 'nombre'=>'Californio','grupo'=>'actinidos'],
        26 => ['simbolo'=>'Es', 'nombre'=>'Einstenio','grupo'=>'actinidos'],
        27 => ['simbolo'=>'Fm', 'nombre'=>'Fermio','grupo'=>'actinidos'],
        28 => ['simbolo'=>'Md', 'nombre'=>'Mendelevio','grupo'=>'actinidos'],
        29 => ['simbolo'=>'No', 'nombre'=>'Nobelio','grupo'=>'actinidos'],
        30 => ['simbolo'=>'Lr', 'nombre'=>'Lawrencio','grupo'=>'actinidos'],
    ];

    $grupos = [
        'alcalinos' => '#A99ABD',
        'alcalinoterreos' => '#C085D1',
        'metales de transicion' => '#EDB632',
        'lantanidos' => '#DE7710',
        'actinidos' => '#E9967A',
        'otros metales' => '#FAF430',
        'metaloides' => '#B8C54E',
        'otros no metales' => '#79B325',
        'halogenos' => '#83C7D0',
        'gases nobles' => '#20E1FB',
    ];
?>
<body>
    <h1 class="text-center">Tabla Periodica de los Elementos</h1>
    <h2 id="subtitulo"></h2>
    <hr>
<!--Grupo 1-->
<?php for($i = 1; $i <= count($elementos); $i++):?>
    <?php if(empty($elementos[$i])){ ?> <!--Validacion para elemento vacio-->
        <div <?php echo"style='background-color: #CCCC;'"?> class="cuadricula"> 
            <?php echo "<span>N/A</span>"?> 
        </div>
        <?php if($i==1){?>
            <div class="espacio1"> <?php echo "<span></span>"  ?></div>
        <?php }?>
        <?php if($i==4){?>
            <div class="espacio2"> <?php echo "<span></span>"  ?> </div>
        <?php }?>
        <?php if($i==12){?>
            <div class="espacio2"> <?php echo "<span></span>"  ?> </div>
        <?php }?>
    <?php } else {?>
        <?php $color = $grupos[$elementos[$i]['grupo']] ?>
        <div <?php echo"style='background-color: {$color};'"?> class="cuadricula"> 
            <?php echo "<span> {$elementos[$i]['simbolo']} </span>"  ?> 
        </div>
        <?php if($i==1){?>
            <div class="espacio1"> <?php echo "<span></span>"  ?></div>
        <?php }?>
        <?php if($i==4){?>
            <div class="espacio2"> <?php echo "<span></span>"  ?> </div>
        <?php }?>
        <?php if($i==12){?>
            <div class="espacio2"> <?php echo "<span></span>"  ?> </div>
        <?php }?>
        <?php }?>
<?php endfor;?>
<!--Fin Grupo 1-->
<div></div>
<br>

<!--Grupo 2(Tierras Raras)-->
<?php for($i = 1; $i <= count($elemGrupoF); $i++):?>
    <?php if(empty($elemGrupoF[$i])){ ?> <!--Validacion para elemento vacio-->
        <?php if($i==1 || $i==16){?>
            <div class="espacio3"> <?php echo "<span></span>"  ?> </div>
        <?php }?>
        <div <?php echo"style='background-color: #CCCC;'"?> class="cuadricula"> 
            <?php echo "<span>N/A</span>"?> 
        </div>
    <?php } else {?>
    <?php if($i==1 || $i==16){?>
        <div class="espacio3"> <?php echo "<span></span>"  ?> </div>
    <?php }?>

    <?php $color = $grupos[$elemGrupoF[$i]['grupo']] ?>
    <div <?php echo"style='background-color: {$color};'"?> class="cuadricula">
        <?php echo "<span> {$elemGrupoF[$i]['simbolo']} </span>"  ?> 
    </div>
    
    <?php if($i==15){?>
        <?php echo"<br>"?>
    <?php }?>
    <?php }?>
<?php endfor;?>
<!--Fin Grupo 2-->
<br>
<br>
    
<!--Leyenda-->
<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-5">
    <table class="table table-sm table-bordered">
    <caption>Leyenda</caption>
    <thead>
        <tr>
            <th>Metales</th>
            <th>Metaloides</th>
            <th>No metales</th>
        </tr>
    </thead>
    <tbody class="font-weight-bold"> 
        <tr>
            <td <?php echo "style= 'background-color: {$grupos['alcalinos']}';" ?>>Alcalinos</td>
            <td  class="text-center" rowspan="6" <?php echo "style= 'background-color: {$grupos['metaloides']}';" ?>>Metaloides</td>
            <td rowspan="2" <?php echo "style= 'background-color: {$grupos['otros no metales']}';" ?> >Otros no metales</td>
        </tr>
        <tr>
            <td <?php echo "style= 'background-color: {$grupos['alcalinoterreos']}';" ?>>Alcalinoterreos</td>
        </tr>
        <tr>
            <td <?php echo "style= 'background-color: {$grupos['metales de transicion']}';" ?>>Metales Transicion</td>
            <td rowspan="2" <?php echo "style= 'background-color: {$grupos['halogenos']}';" ?>>Halogenos</td>
        </tr>
        <tr>
            <td <?php echo "style= 'background-color: {$grupos['lantanidos']}';" ?>>Lantanidos</td>
        </tr>
        <tr>
            <td <?php echo "style= 'background-color: {$grupos['actinidos']}';" ?>>Actinidos</td>
            <td rowspan="2" <?php echo "style= 'background-color: {$grupos['gases nobles']}';" ?>>Gases Nobles</td>
        </tr>
        <tr>
            <td <?php echo "style= 'background-color: {$grupos['otros metales']}';" ?>>Otros Metales</td>
        </tr>
    </tbody>
</table>
    </div>
</div>

<!--Footer-->
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <span class="text-muted">Saul Johan Alonzo Placencia - 2018-6764</span>
    <span class="float-right text-muted">Programacion Web</span>
  </div>
</footer>
</body>
</html>