<?php
if (isset($_GET['y'])){
    switch ($_GET['y']){
        case 'KELUAR':
            include("KELUAR.PHP");
            break;
        case 'ADMIN':
            include("ADMIN.PHP");
            break;
        case 'TADMIN':
            include("TADMIN.PHP");
            break;
        case 'SADMIN':
            include("SADMIN.PHP");
            break;
        case 'HADMIN':
            include("HADMIN.PHP");
            break;
        case 'EADMIN':
            include("EADMIN.PHP");
            break;
        case 'UADMIN':
            include("UADMIN.PHP");
            break;
        case 'NASABAH':
            include("NASABAH.PHP");
            break;
        case 'TNASABAH':
            include("TNASABAH.PHP");
            break;
        case 'SNASABAH':
            include("SNASABAH.PHP");
            break;
        case 'HNASABAH':
            include("HNASABAH.PHP");
            break;
        case 'ENASABAH':
            include("ENASABAH.PHP");
            break;
        case 'UNASABAH':
            include("UNASABAH.PHP");
            break;
        case 'RNASABAH':
            include("RNASABAH.PHP");
            break;
    }
}
else{
    echo "<h3></h3>";
}