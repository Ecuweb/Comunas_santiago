// Código personalizado para agregar comunas de Chile a WooCommerce
function custom_chilean_comunas( $states ) {
    $states['CL'] = array(
        'BI' => 'Buin',
        'CA' => 'Colina',
        'CE' => 'Cerrillos',
        'CN' => 'Cerro Navia',
        'CO' => 'Conchalí',
        'EB' => 'El Bosque',
        'ES' => 'Estación Central',
        'HU' => 'Huechuraba',
        'ID' => 'Independencia',
        'LA' => 'La Cisterna',
        'LF' => 'La Florida',
        'LG' => 'La Granja',
        'LI' => 'La Pintana',
        'LR' => 'La Reina',
        'LS' => 'La Serena', // Solo una vez
        'LC' => 'Las Condes',
        'LB' => 'Lo Barnechea',
        'LE' => 'Lo Espejo',
        'LO' => 'Lo Prado',
        'LP' => 'Lampa',
        'MP' => 'Maipú',
        'MU' => 'Macul',
        'NN' => 'Ñuñoa',
        'PA' => 'Puente Alto',
        'PC' => 'Pedro A Cerda',
        'PE' => 'Peñalolen',
        'PH' => 'Padre Hurtado',
        'PN' => 'Peñaflor',
        'PV' => 'Providencia',
        'PD' => 'Pudahuel',
        'QL' => 'Quilicura',
        'QN' => 'Quinta Normal',
        'RC' => 'Recoleta',
        'RE' => 'Renca',
        'SB' => 'San Bernardo',
        'SJ' => 'San Joaquín',
        'SM' => 'San Miguel',
        'SR' => 'San Ramón',
        'SC' => 'Santiago Centro',
        'VT' => 'Vitacura',
        'M1' => 'Despacho Metro',
        'PI' => 'Paine',
    
        
    );
    return $states;
}
add_filter( 'woocommerce_states', 'custom_chilean_comunas' );