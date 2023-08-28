<?php

$estados = ['mg', 'sp', 'am', 'ba', 'rj', 'rs', 'rn', 'ce', 'se', 'pr', 'sc', 'mt'];

foreach ($estados as $estado) {
    #echo "{$estado}\n";

    switch ($estado) {
        case 'mg': echo "Minas Gerais\n"; break;
        case 'sp': echo "São Paulo\n"; break;
        case 'am': echo "Amazonas\n"; break;
        case 'ba': echo "Bahia\n"; break;
        case 'rj': echo "Rio de Janeiro\n"; break;
        case 'rs': echo "Rio Grande do Sul\n"; break;
        case 'rn': echo "Rio Grande do Norte\n"; break;
        case 'ce': echo "Ceará\n"; break;
        case 'se': echo "Sergipe\n"; break;
        case 'pr': echo "Paraná\n"; break;
        case 'sc': echo "Santa catarina\n"; break;
        case 'mt': echo "Mato Grosso\n"; break;
        
        default:
            # code...
            break;
    }
}
