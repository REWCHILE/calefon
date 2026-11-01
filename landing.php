<?php
/**
 * Central Calefón Chile - Landing Page Dinámica para SEO Local por Comunas y Regiones
 * Genera contenido de alta conversión, Schemas LocalBusiness + Plumber + FAQPage + BreadcrumbList,
 * Open Graph para Facebook Debugger / WhatsApp y la sección interactiva de video en terreno.
 */

// Obtener slug de la petición
$requestedSlug = '';
if (isset($slug) && !empty($slug)) {
    $requestedSlug = $slug;
} elseif (isset($_GET['slug']) && !empty($_GET['slug'])) {
    $requestedSlug = $_GET['slug'];
} else {
    $uriPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    $uriPath = trim($uriPath, '/');
    $parts = explode('/', $uriPath);
    $requestedSlug = end($parts);
}

// Limpiar slug
$requestedSlug = strtolower(trim($requestedSlug));
if (str_ends_with($requestedSlug, '.php')) {
    $requestedSlug = substr($requestedSlug, 0, -4);
}

// Base de datos de comunas y zonas de cobertura en Chile
$comunasData = [
    // --- REGIÓN METROPOLITANA ---
    'santiago' => [
        'nombre' => 'Santiago Centro',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Santa Isabel, Parque Almagro, República, Bellas Artes, Lastarria, Franklin, Matta Sur y Santiago Centro',
        'gas' => 'Gas Natural por red de cañerías en edificios y condominios',
        'cobertura' => 'Especialistas en calefones de tiro forzado, ionizados automáticos y termos eléctricos en departamentos de Santiago.'
    ],
    'las-condes' => [
        'nombre' => 'Las Condes',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'El Golf, San Carlos de Apoquindo, Manquehue, Colón, Los Dominicos, Cantagallo y Escuela Militar',
        'gas' => 'Gas Natural Metrogas y calderas murales mixtas',
        'cobertura' => 'Servicio técnico especializado para casas de alto estándar, departamentos y condominios residenciales.'
    ],
    'providencia' => [
        'nombre' => 'Providencia',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Pedro de Valdivia, Los Leones, Pocuro, Bellavista, Manuel Montt, Tobalaba y Salvador',
        'gas' => 'Red de Gas Natural cañería Metrogas en departamentos antiguos y modernos',
        'cobertura' => 'Especialistas en calefones de tiro forzado, cámaras estancas y termos eléctricos en edificios.'
    ],
    'nunoa' => [
        'nombre' => 'Ñuñoa',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Plaza Ñuñoa, Irarrázaval, Simón Bolívar, Sucre, Bilbao, Parque Bustamante y Villa Frei',
        'gas' => 'Gas Natural Metrogas en departamentos y casas',
        'cobertura' => 'Servicio técnico multimarca autorizado SEC para residentes de Ñuñoa con repuestos legítimos.'
    ],
    'vitacura' => [
        'nombre' => 'Vitacura',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Santa María de Manquehue, Lo Curro, Bicentenario, Alonso de Córdova y Vitacura Centro',
        'gas' => 'Gas Natural cañería y sistemas de calefacción central',
        'cobertura' => 'Atención técnica de precisión para calefones de alta gama, calderas y termos en Vitacura.'
    ],
    'la-reina' => [
        'nombre' => 'La Reina',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'La Reina Alta, Príncipe de Gales, Larraín, Las Perdices y Blest Gana',
        'gas' => 'Gas Natural y Gas Licuado de granel',
        'cobertura' => 'Mantención y reparación de calefones, termos y calderas en casas y condominios de La Reina.'
    ],
    'maipu' => [
        'nombre' => 'Maipú',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Pajaritos, Ciudad Satélite, El Abrazo, Rinconada, Las Rosas y Maipú Centro',
        'gas' => 'Gas licuado y Gas Natural cañería',
        'cobertura' => 'Visita a domicilio en todos los barrios y villas de Maipú con repuestos originales de fábrica.'
    ],
    'la-florida' => [
        'nombre' => 'La Florida',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Vicuña Mackenna, Walker Martínez, Tobalaba, Rojas Magallanes, La Florida Alta y Jardín Alto',
        'gas' => 'Gas Natural Metrogas y gas licuado en balones',
        'cobertura' => 'Atención prioritaria en casas residenciales y condominios cerrados en La Florida.'
    ],
    'puente-alto' => [
        'nombre' => 'Puente Alto',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Ciudad del Sol, Las Vizcachas, Concha y Toro, San Carlos, Ejército Libertador y Bajos de Mena',
        'gas' => 'Gas licuado cilindros y cañería',
        'cobertura' => 'Asistencia a domicilio con móviles disponibles en todo Puente Alto para reparaciones urgentes.'
    ],
    'san-miguel' => [
        'nombre' => 'San Miguel',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Gran Avenida, El Llano Subercaseaux, Departamental, Salesianos y Ciudad del Niño',
        'gas' => 'Gas Natural y Gas Licuado',
        'cobertura' => 'Reparación de tiro forzado y calefones de paso en edificios y condominios de San Miguel.'
    ],
    'macul' => [
        'nombre' => 'Macul',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Quilín, Macul Alto, Escuela Agrícola, Vicuña Mackenna, Rodrigo de Araya y Plaza Macul',
        'gas' => 'Gas Natural Metrogas y Gas Licuado de Petróleo GLP',
        'cobertura' => 'Atención rápida en departamentos, edificios modernos y casas habitacionales en Macul.'
    ],
    'penalolen' => [
        'nombre' => 'Peñalolén',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 60 minutos',
        'sectores' => 'Comunidad Ecológica, Las Pircas, Consistorial, Peñalolén Alto, Los Presidentes y El Ensueño',
        'gas' => 'Gas licuado balones (Lipigas, Abastible, Gasco) y red de Gas Natural por cañería',
        'cobertura' => 'Servicio a domicilio en casas, condominios cerrados y parcelas residenciales en Peñalolén.'
    ],
    'independencia' => [
        'nombre' => 'Independencia',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Plaza Chacabuco, Hipódromo Chile, Vivaceta, Santos Dumont y Gamero',
        'gas' => 'Gas Natural y cilindros de gas',
        'cobertura' => 'Asistencia técnica autorizada SEC en departamentos y casas de Independencia.'
    ],
    'recoleta' => [
        'nombre' => 'Recoleta',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'El Salto, Dorsal, Einstein, Bellavista Norte, Cementerio y Patronato',
        'gas' => 'Gas Natural y cilindros de GLP',
        'cobertura' => 'Reparación y mantención de calefones a domicilio en Recoleta.'
    ],
    'estacion-central' => [
        'nombre' => 'Estación Central',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Alameda, Villa Portales, General Velásquez, Los Nogales, 5 de Abril y Pajaritos',
        'gas' => 'Gas Natural y tiro forzado en torres residenciales',
        'cobertura' => 'Expertos en tiro forzado eléctrico, extracción de gases y calderas murales.'
    ],
    'quilicura' => [
        'nombre' => 'Quilicura',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Valle Lo Campino, San Luis, Lo Cruzat, Santa Luisa y Quilicura Centro',
        'gas' => 'Gas Natural cañería y balones de gas licuado',
        'cobertura' => 'Técnicos certificados con repuestos para casas y condominios en Quilicura.'
    ],
    'pudahuel' => [
        'nombre' => 'Pudahuel',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Pudahuel Sur, Ciudad de los Valles, Noviciado, San Pablo y Enea',
        'gas' => 'Gas licuado y Gas Natural',
        'cobertura' => 'Cobertura completa en Pudahuel Norte, Sur y sectores residenciales.'
    ],
    'colina' => [
        'nombre' => 'Colina / Chicureo',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Chicureo, Chamisero, Piedra Roja, Colina Centro y Las Canteras',
        'gas' => 'Gas licuado a granel en estanques y Gas Natural',
        'cobertura' => 'Especialistas en calefones de alta potencia y calderas en Colina y Chicureo.'
    ],
    'san-bernardo' => [
        'nombre' => 'San Bernardo',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Plaza San Bernardo, Nos, Chena, Las Acacias, Maestranza y Portada del Sur',
        'gas' => 'Gas licuado cilindros y red de cañería',
        'cobertura' => 'Atención rápida en San Bernardo con técnicos instaladores autorizados SEC.'
    ],
    'san-joaquin' => [
        'nombre' => 'San Joaquín',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Vicuña Mackenna, Santa Rosa, Carlos Valdovinos, Las Industrias y Legua',
        'gas' => 'Gas Natural Metrogas y balones GLP',
        'cobertura' => 'Reparación y mantención garantizada en casas y departamentos de San Joaquín.'
    ],
    'renca' => [
        'nombre' => 'Renca',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Plaza Renca, Vicuña Mackenna, Huamachuco, Cerro Colorado y El Retiro',
        'gas' => 'Gas licuado cilindros 15kg/45kg y cañería',
        'cobertura' => 'Servicio técnico a domicilio en toda la comuna de Renca con repuestos en mano.'
    ],
    'lo-barnechea' => [
        'nombre' => 'Lo Barnechea',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'La Dehesa, El Huinganal, Los Trapenses, El Arrayán y Lo Barnechea Pueblo',
        'gas' => 'Gas licuado granel y Gas Natural',
        'cobertura' => 'Servicio técnico experto en equipos tiro forzado y calderas en Lo Barnechea.'
    ],
    'pedro-aguirre-cerda' => [
        'nombre' => 'Pedro Aguirre Cerda',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Club Hípico, Departamental, Carlos Valdovinos, Población Dávila y Ochagavía',
        'gas' => 'Gas licuado cilindros y Gas Natural',
        'cobertura' => 'Atención a domicilio en el día con técnicos certificados SEC en Pedro Aguirre Cerda.'
    ],
    'padre-hurtado' => [
        'nombre' => 'Padre Hurtado',
        'region' => 'Región Metropolitana',
        'tiempo' => '40 a 55 minutos',
        'sectores' => 'Camino a Melipilla, San Ignacio, Laguna del Sol, Los Silos y Santa Rosa de Chena',
        'gas' => 'Gas licuado balones, estanques y redes residenciales',
        'cobertura' => 'Atención rápida en condominios nuevos y sectores tradicionales de Padre Hurtado.'
    ],
    'buin' => [
        'nombre' => 'Buin',
        'region' => 'Región Metropolitana',
        'tiempo' => '40 a 60 minutos',
        'sectores' => 'Buin Centro, Alto Jahuel, Maipo, Viluco y condominios residenciales',
        'gas' => 'Gas licuado balones, estanques granel y calefones de paso',
        'cobertura' => 'Servicio a domicilio en parcelas y condominios de Buin.'
    ],
    'paine' => [
        'nombre' => 'Paine',
        'region' => 'Región Metropolitana',
        'tiempo' => '45 a 60 minutos',
        'sectores' => 'Centro de Paine, Champa, Huelquén, Hospital y Colonia Kennedy',
        'gas' => 'Gas licuado en cilindros, estanques granel y calefones de alta capacidad',
        'cobertura' => 'Móviles habilitados para desplazarse por parcelas y residencias de Paine.'
    ],
    'pirque' => [
        'nombre' => 'Pirque',
        'region' => 'Región Metropolitana',
        'tiempo' => '45 a 60 minutos',
        'sectores' => 'El Principal, San Juan, Santa Rita, El Llano y Las Majadas',
        'gas' => 'Gas licuado a granel en estanques, cilindros de 45kg y calefones de gran litraje',
        'cobertura' => 'Técnicos equipados para atención en parcelas, viviendas campestres y casas en Pirque.'
    ],
    'lampa' => [
        'nombre' => 'Lampa',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Batuco, Valle Grande, Larapinta, Lampa Centro y Chicauma',
        'gas' => 'Gas licuado cilindros y estanques GLP',
        'cobertura' => 'Atención especializada en condominios modernos y parcelas en Lampa.'
    ],
    'huechuraba' => [
        'nombre' => 'Huechuraba',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Ciudad Empresarial, Pedro Fontova, Santa Marta y El Carmen de Huechuraba',
        'gas' => 'Gas Natural Metrogas y Gas Licuado',
        'cobertura' => 'Técnicos equipados para reparación de calefones ionizados y tiro forzado en Huechuraba.'
    ],
    'quinta-normal' => [
        'nombre' => 'Quinta Normal',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Matucana, Mapocho, San Pablo, Carrascal y Parque Quinta Normal',
        'gas' => 'Gas Natural y balones de gas licuado',
        'cobertura' => 'Reparación de calefones convencionales y automáticos a domicilio en Quinta Normal.'
    ],
    'cerrillos' => [
        'nombre' => 'Cerrillos',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Ciudad Parque Bicentenario, Pedro Aguirre Cerda, Lo Errázuriz y Buzeta',
        'gas' => 'Gas Natural y cilindros GLP',
        'cobertura' => 'Servicio técnico a domicilio en villas y departamentos de Cerrillos.'
    ],
    'el-bosque' => [
        'nombre' => 'El Bosque',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Gran Avenida, Los Morros, San Francisco y Alejandro Guzmán',
        'gas' => 'Gas licuado balones 11kg/15kg/45kg y cañería',
        'cobertura' => 'Atención de emergencias y mantención de calefones en El Bosque.'
    ],
    'la-cisterna' => [
        'nombre' => 'La Cisterna',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Gran Avenida, Américo Vespucio, El Parrón y Fernández Albano',
        'gas' => 'Gas Natural y balones de gas licuado',
        'cobertura' => 'Diagnóstico rápido y cambio de repuestos originales en La Cisterna.'
    ],
    'la-pintana' => [
        'nombre' => 'La Pintana',
        'region' => 'Región Metropolitana',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Santa Rosa, Gabriela, Lo Blanco y San Rafael',
        'gas' => 'Gas licuado en cilindros',
        'cobertura' => 'Servicio técnico certificado SEC a domicilio en La Pintana.'
    ],
    'lo-espejo' => [
        'nombre' => 'Lo Espejo',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Central, Américo Vespucio Sur, Santa Olga y Lo Sierra',
        'gas' => 'Gas licuado y cañería',
        'cobertura' => 'Atención profesional de gasfitería SEC en Lo Espejo.'
    ],
    'lo-prado' => [
        'nombre' => 'Lo Prado',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'San Pablo, Neptuno, General Bonilla y Blanqueado',
        'gas' => 'Gas Natural cañería y balones GLP',
        'cobertura' => 'Reparación en el día de calefones Junkers, Splendid y Mademsa en Lo Prado.'
    ],
    'san-ramon' => [
        'nombre' => 'San Ramón',
        'region' => 'Región Metropolitana',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Santa Rosa, Américo Vespucio, La Bandera y La Esperanza',
        'gas' => 'Gas licuado y Gas Natural',
        'cobertura' => 'Instalación y reparación bajo estricta normativa SEC en San Ramón.'
    ],
    'talagante' => [
        'nombre' => 'Talagante',
        'region' => 'Región Metropolitana',
        'tiempo' => '40 a 60 minutos',
        'sectores' => 'Talagante Centro, Camino El Oliveto, Las Palmeras y Lonquén',
        'gas' => 'Gas licuado estanques granel y cilindros',
        'cobertura' => 'Servicio para parcelas de agrado y casas en Talagante.'
    ],
    'penaflor' => [
        'nombre' => 'Peñaflor',
        'region' => 'Región Metropolitana',
        'tiempo' => '40 a 60 minutos',
        'sectores' => 'Miraflores, Malloco, Vicuña Mackenna y Las Palmeras',
        'gas' => 'Gas licuado granel y cilindros GLP',
        'cobertura' => 'Mantención y reparación de calefones en Peñaflor y Malloco.'
    ],
    'melipilla' => [
        'nombre' => 'Melipilla',
        'region' => 'Región Metropolitana',
        'tiempo' => '45 a 65 minutos',
        'sectores' => 'Melipilla Centro, Pomaire, El Bollenar y San Manuel',
        'gas' => 'Gas licuado cilindros y estanques',
        'cobertura' => 'Técnicos equipados para atención en Melipilla y sectores aledaños.'
    ],

    // --- REGIÓN DE COQUIMBO ---
    'la-serena' => [
        'nombre' => 'La Serena',
        'region' => 'Región de Coquimbo',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Cuatro Esquinas, Avenida del Mar, San Joaquín, El Milagro, La Florida y La Serena Centro',
        'gas' => 'Gas licuado cilindros y estanques GLP',
        'cobertura' => 'Servicio a domicilio en casas residenciales y departamentos en La Serena.'
    ],
    'coquimbo' => [
        'nombre' => 'Coquimbo',
        'region' => 'Región de Coquimbo',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Costanera, La Herradura, Sindempart, El Llano, San Juan y Coquimbo Puerto',
        'gas' => 'Gas licuado cilindros y tanques GLP',
        'cobertura' => 'Atención inmediata para calefones de paso, ionizados y termos en Coquimbo.'
    ],
    'san-joaquin-la-serena' => [
        'nombre' => 'San Joaquín (La Serena)',
        'region' => 'Región de Coquimbo',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Colina El Pino, Las Rastras, Alberto Arenas y Lomas de San Joaquín',
        'gas' => 'Gas licuado balones y estanques',
        'cobertura' => 'Móviles equipados para casas y condominios en San Joaquín La Serena.'
    ],
    'penuelas' => [
        'nombre' => 'Peñuelas',
        'region' => 'Región de Coquimbo',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Avenida del Mar, Costanera, Casino Enjoy y Peñuelas Alto',
        'gas' => 'Gas licuado y tiro forzado en departamentos',
        'cobertura' => 'Especialistas en calefones de edificios turísticos y residenciales de Peñuelas.'
    ],
    'las-companias' => [
        'nombre' => 'Las Compañías',
        'region' => 'Región de Coquimbo',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Las Compañías Alta, Baja, El Romero y Villa El Indio',
        'gas' => 'Gas licuado en cilindros 15kg/45kg',
        'cobertura' => 'Reparación express con repuestos legítimos en Las Compañías.'
    ],
    'tierras-blancas' => [
        'nombre' => 'Tierras Blancas',
        'region' => 'Región de Coquimbo',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Avenida Linares, Talca, René Schneider y Parque Industrial',
        'gas' => 'Gas licuado balones y cañería',
        'cobertura' => 'Atención a domicilio con técnicos autorizados SEC en Tierras Blancas.'
    ],
    'ovalle' => [
        'nombre' => 'Ovalle',
        'region' => 'Región de Coquimbo',
        'tiempo' => '40 a 60 minutos',
        'sectores' => 'Ovalle Centro, Limarí, Los Peñones, La Chimba y Huamalata',
        'gas' => 'Gas licuado cilindros y estanques a granel',
        'cobertura' => 'Mantención y reparación de calefones solares y a gas en Ovalle.'
    ],
    'vicuna' => [
        'nombre' => 'Vicuña',
        'region' => 'Región de Coquimbo',
        'tiempo' => '45 a 65 minutos',
        'sectores' => 'Valle de Elqui, Vicuña Centro, Calingasta, Rivadavia y El Tambo',
        'gas' => 'Gas licuado cilindros y termos solares',
        'cobertura' => 'Atención técnica para viviendas y complejos turísticos en el Valle de Elqui y Vicuña.'
    ],

    // --- REGIÓN DE VALPARAÍSO ---
    'vina-del-mar' => [
        'nombre' => 'Viña del Mar',
        'region' => 'Región de Valparaíso',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Recreo, Miraflores, Agua Santa, Sporting, Plan de Viña, Gómez Carreño y Santa Inés',
        'gas' => 'Gas Natural Gasvalpo y cilindros GLP',
        'cobertura' => 'Servicio técnico especializado en calefones tiro forzado y tradicionales en Viña del Mar.'
    ],
    'valparaiso' => [
        'nombre' => 'Valparaíso',
        'region' => 'Región de Valparaíso',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Cerro Alegre, Cerro Concepción, Playa Ancha, Bellavista, Barón y Almendral',
        'gas' => 'Gas Natural y cilindros de gas licuado',
        'cobertura' => 'Móviles adaptados para subir a los cerros de Valparaíso con herramientas y repuestos.'
    ],
    'concon' => [
        'nombre' => 'Concón',
        'region' => 'Región de Valparaíso',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Bosques de Montemar, Costa de Montemar, Concón Centro, Higuerillas y La Boca',
        'gas' => 'Gas Natural cañería y Gas Licuado',
        'cobertura' => 'Atención de alta calidad en departamentos costeros y condominios de Concón.'
    ],
    'renaca' => [
        'nombre' => 'Reñaca',
        'region' => 'Región de Valparaíso',
        'tiempo' => '30 a 45 minutos',
        'sectores' => 'Jardín del Mar, Los Almendros, Central Reñaca, La Foresta y Reñaca Alto',
        'gas' => 'Gas Natural cañería y Gas Licuado GLP',
        'cobertura' => 'Especialistas en tiro forzado y calderas murales en Reñaca.'
    ],
    'quilpue' => [
        'nombre' => 'Quilpué',
        'region' => 'Región de Valparaíso',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'El Belloto, Los Pinos, Quilpué Centro, Valencia y Paso Hondo',
        'gas' => 'Gas Natural y Gas Licuado en cilindros',
        'cobertura' => 'Servicio técnico a domicilio en El Belloto y todo Quilpué.'
    ],
    'villa-alemana' => [
        'nombre' => 'Villa Alemana',
        'region' => 'Región de Valparaíso',
        'tiempo' => '35 a 50 minutos',
        'sectores' => 'Peñablanca, Huanhualí, Troncos Viejos y Villa Alemana Centro',
        'gas' => 'Gas licuado y cañería',
        'cobertura' => 'Atención en casas y condominios de Villa Alemana y Peñablanca.'
    ],
    'quillota' => [
        'nombre' => 'Quillota',
        'region' => 'Región de Valparaíso',
        'tiempo' => '40 a 55 minutos',
        'sectores' => 'Quillota Centro, San Pedro, El Sendero y Corvi',
        'gas' => 'Gas licuado balones y cañería',
        'cobertura' => 'Técnicos autorizados SEC para Quillota y alrededores.'
    ],
    'la-calera' => [
        'nombre' => 'La Calera',
        'region' => 'Región de Valparaíso',
        'tiempo' => '40 a 60 minutos',
        'sectores' => 'Artificio, Calera Centro y El Trébol',
        'gas' => 'Gas licuado cilindros y cañería',
        'cobertura' => 'Servicio técnico integral de calefones en La Calera.'
    ],
    'san-antonio' => [
        'nombre' => 'San Antonio',
        'region' => 'Región de Valparaíso',
        'tiempo' => '40 a 60 minutos',
        'sectores' => 'Barrancas, Llolleo, San Antonio Puerto y Bellavista',
        'gas' => 'Gas licuado balones y estanques',
        'cobertura' => 'Reparación y mantención garantizada en San Antonio y Llolleo.'
    ],
    'los-andes' => [
        'nombre' => 'Los Andes',
        'region' => 'Región de Valparaíso',
        'tiempo' => '45 a 65 minutos',
        'sectores' => 'Los Andes Centro, San Rafael y Centenario',
        'gas' => 'Gas licuado cilindros y estanques',
        'cobertura' => 'Atención para viviendas en el Valle de Aconcagua.'
    ],
    'san-felipe' => [
        'nombre' => 'San Felipe',
        'region' => 'Región de Valparaíso',
        'tiempo' => '45 a 65 minutos',
        'sectores' => 'San Felipe Centro, Curimón y Almendral',
        'gas' => 'Gas licuado cilindros',
        'cobertura' => 'Móviles técnicos certificados SEC en San Felipe.'
    ],

    // --- COBERTURA NACIONAL (CIUDADES PRINCIPALES) ---
    'antofagasta' => [
        'nombre' => 'Antofagasta',
        'region' => 'Región de Antofagasta',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Sector Norte, Playa Blanca, Jardines del Sur, Coviefi y Antofagasta Centro',
        'gas' => 'Gas Natural Intergas y cilindros GLP',
        'cobertura' => 'Servicio técnico especializado en zonas residenciales y condominios de Antofagasta.'
    ],
    'iquique' => [
        'nombre' => 'Iquique',
        'region' => 'Región de Tarapacá',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Cavancha, Huayquique, Playa Brava, Iquique Centro y Alto Hospicio',
        'gas' => 'Gas licuado balones y cañería',
        'cobertura' => 'Atención rápida en departamentos frente al mar y casas en Iquique.'
    ],
    'arica' => [
        'nombre' => 'Arica',
        'region' => 'Región de Arica y Parinacota',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Arica Centro, Chinchorro, Saucache y Azapa',
        'gas' => 'Gas licuado cilindros y termos solares',
        'cobertura' => 'Reparación de calefones y termos solares en Arica.'
    ],
    'copiapo' => [
        'nombre' => 'Copiapó',
        'region' => 'Región de Atacama',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Copiapó Centro, Los Carrera, El Palomar y Paipote',
        'gas' => 'Gas licuado balones y estanques',
        'cobertura' => 'Técnicos acreditados SEC a domicilio en Copiapó.'
    ],
    'rancagua' => [
        'nombre' => 'Rancagua',
        'region' => 'Región de O’Higgins',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Rancagua Centro, Machalí, Manzanal, San Damián y Parque Koke',
        'gas' => 'Gas Natural y Gas Licuado',
        'cobertura' => 'Servicio técnico en casas y condominios en Rancagua y Machalí.'
    ],
    'talca' => [
        'nombre' => 'Talca',
        'region' => 'Región del Maule',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Las Rastras, Talca Centro, La Florida y San Valentín',
        'gas' => 'Gas licuado cilindros y red cañería',
        'cobertura' => 'Asistencia a domicilio con repuestos legítimos en Talca.'
    ],
    'curico' => [
        'nombre' => 'Curicó',
        'region' => 'Región del Maule',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Curicó Centro, Zapallar, Rauquén y Los Niches',
        'gas' => 'Gas licuado balones y estanques',
        'cobertura' => 'Reparación de calefones multimarca en Curicó.'
    ],
    'chillan' => [
        'nombre' => 'Chillán',
        'region' => 'Región de Ñuble',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Chillán Centro, Los Volcanes, Quilamapu y Chillán Viejo',
        'gas' => 'Gas licuado cilindros y cañería',
        'cobertura' => 'Atención rápida en Chillán y Chillán Viejo.'
    ],
    'concepcion' => [
        'nombre' => 'Concepción',
        'region' => 'Región del Biobío',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Concepción Centro, San Pedro de la Paz, Talcahuano, Chiguayante y Hualpén',
        'gas' => 'Gas Natural GasSur y cilindros GLP',
        'cobertura' => 'Especialistas en calefones ionizados, tiro forzado y calderas en el Gran Concepción.'
    ],
    'los-angeles' => [
        'nombre' => 'Los Ángeles',
        'region' => 'Región del Biobío',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Los Ángeles Centro, Paillihue, Sor Vicenta y El Peral',
        'gas' => 'Gas licuado cilindros y estanques',
        'cobertura' => 'Servicio técnico garantizado en Los Ángeles.'
    ],
    'temuco' => [
        'nombre' => 'Temuco',
        'region' => 'Región de La Araucanía',
        'tiempo' => '30 a 50 minutos',
        'sectores' => 'Avenida Alemania, Portal San Francisco, Labranza, Pueblo Nuevo y Padre Las Casas',
        'gas' => 'Gas licuado cilindros y cañería',
        'cobertura' => 'Reparación y mantención de calefones y calderas en Temuco.'
    ],
    'valdivia' => [
        'nombre' => 'Valdivia',
        'region' => 'Región de Los Ríos',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Isla Teja, Las Ánimas, Valdivia Centro, Collico y Regional',
        'gas' => 'Gas licuado y termos eléctricos',
        'cobertura' => 'Atención técnica multimarca en Valdivia.'
    ],
    'osorno' => [
        'nombre' => 'Osorno',
        'region' => 'Región de Los Lagos',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Osorno Centro, Rahue, Francke y Kolbe',
        'gas' => 'Gas licuado cilindros y cañería',
        'cobertura' => 'Móviles equipados para reparación de calefones en Osorno.'
    ],
    'puerto-montt' => [
        'nombre' => 'Puerto Montt',
        'region' => 'Región de Los Lagos',
        'tiempo' => '35 a 55 minutos',
        'sectores' => 'Puerto Montt Centro, Mirasol, Valle Volcanes, Alerce y Puerto Varas',
        'gas' => 'Gas licuado y termos eléctricos de acumulación',
        'cobertura' => 'Servicio técnico a domicilio en Puerto Montt, Alerce y Puerto Varas.'
    ]
];

// Identificar si el slug corresponde a una comuna o página pilar
$landingType = 'comuna';
$matchedComuna = null;
$comunaKey = '';

// Normalizar slug para buscar coincidencias
$cleanSlug = str_replace(['servicio-tecnico-calefon-', 'servicio-tecnico-'], '', $requestedSlug);

// Comprobación de páginas pilares
if ($requestedSlug === 'servicio-tecnico-autorizado-calefon' || $cleanSlug === 'autorizado-calefon') {
    $landingType = 'autorizado';
} elseif ($requestedSlug === 'servicio-tecnico-especialista-en-calefon' || $cleanSlug === 'especialista-en-calefon') {
    $landingType = 'especialista';
} else {
    // 1. Coincidencia exacta con la llave
    if (isset($comunasData[$cleanSlug])) {
        $matchedComuna = $comunasData[$cleanSlug];
        $comunaKey = $cleanSlug;
    } else {
        // 2. Coincidencia parcial
        foreach ($comunasData as $key => $data) {
            if (str_contains($requestedSlug, $key) || $cleanSlug === $key) {
                $matchedComuna = $data;
                $comunaKey = $key;
                break;
            }
        }
    }
}

// Valores por defecto si no coincide exactamente con una comuna
if (!$matchedComuna && $landingType === 'comuna') {
    $matchedComuna = [
        'nombre' => ucwords(str_replace('-', ' ', $cleanSlug ?: 'Chile')),
        'region' => 'Región Metropolitana y Todo Chile',
        'tiempo' => '30 a 60 minutos',
        'sectores' => 'Todos los sectores, condominios, departamentos y villas residenciales',
        'gas' => 'Gas Licuado (GLP) y Gas Natural (GN)',
        'cobertura' => 'Atención a domicilio en todo el territorio nacional con técnicos acreditados SEC.'
    ];
    $comunaKey = 'chile';
}

// Configurar Metadatos SEO específicos y URLs limpias sin .php
if ($landingType === 'autorizado') {
    $pageTitle = "Servicio Técnico Autorizado de Calefones en Chile | Gasfíter Certificado SEC";
    $pageDescription = "Servicio técnico certificado SEC autorizado en calefones multimarca a domicilio en Chile. Diagnóstico, mantención y reparación con repuestos legítimos en el día.";
    $h1Title = "Servicio Técnico Autorizado de Calefones";
    $h1Sub = "Atención técnica oficial a domicilio con gasfíteres autorizados por la Superintendencia de Electricidad y Combustibles (SEC) en todo Chile.";
    $canonicalSlug = "servicio-tecnico-autorizado-calefon";
} elseif ($landingType === 'especialista') {
    $pageTitle = "Especialista en Calefones a Domicilio Chile | Diagnóstico y Reparación SEC";
    $pageDescription = "Técnicos especialistas en reparación y mantención de calefones a gas, tiro forzado y eléctricos. Más de 20 años de experiencia técnica respaldada por la SEC.";
    $h1Title = "Servicio Técnico Especialista en Calefones";
    $h1Sub = "Especialistas certificados SEC en detección de fallas, cambio de repuestos originales y descalcificación de sarro en el mismo día.";
    $canonicalSlug = "servicio-tecnico-especialista-en-calefon";
} else {
    $comunaNombre = $matchedComuna['nombre'];
    $pageTitle = "Servicio Técnico Calefón {$comunaNombre} a Domicilio | Gasfíter SEC";
    $pageDescription = "Servicio técnico de calefones en {$comunaNombre} ({$matchedComuna['region']}) a domicilio. Reparación, mantención e instalación multimarca por instaladores acreditados SEC. Atención rápida en el día.";
    $h1Title = "Servicio Técnico de Calefón en {$comunaNombre}";
    $h1Sub = "Reparación, mantención preventiva y cambio de repuestos originales a domicilio en {$comunaNombre}. Técnicos con certificación SEC oficial.";
    $canonicalSlug = "servicio-tecnico-calefon-{$comunaKey}";
    if ($comunaKey === 'pedro-aguirre-cerda' && $requestedSlug === 'servicio-tecnico-pedro-aguirre-cerda') {
        $canonicalSlug = "servicio-tecnico-pedro-aguirre-cerda";
    }
}

$canonicalUrl = "https://centralcalefon.cl/{$canonicalSlug}";
$currentPage = 'landing';

// Incluir header global (contiene Open Graph para Facebook Debugger y meta tags)
require_once __DIR__ . '/includes/header.php';
?>

<!-- Schema JSON-LD LocalBusiness específico para esta Comuna/Servicio -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["LocalBusiness", "Plumber", "HVACBusiness"],
  "@id": "<?php echo $canonicalUrl; ?>#local",
  "name": "Central Calefón <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Chile'); ?>",
  "url": "<?php echo $canonicalUrl; ?>",
  "telephone": "+56932237072",
  "priceRange": "$$",
  "image": "https://centralcalefon.cl/assets/images/og-central-calefon-sec.jpg",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Santiago'); ?>",
    "addressRegion": "<?php echo htmlspecialchars($matchedComuna ? $matchedComuna['region'] : 'Región Metropolitana'); ?>",
    "addressCountry": "CL"
  },
  "areaServed": {
    "@type": "AdministrativeArea",
    "name": "<?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Chile'); ?>"
  },
  "provider": {
    "@type": "Person",
    "name": "Domingo Isaín Plaza Caamaño",
    "jobTitle": "Instalador de Gas Clase 3 Autorizado SEC",
    "identifier": "12.738.961-6"
  }
}
</script>

<!-- Schema JSON-LD FAQPage para Google Rich Snippets -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cuánto tarda en llegar el técnico a <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'mi domicilio'); ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Coordinamos visitas en el mismo día. Dependiendo del sector de <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'tu comuna'); ?>, nuestros móviles suelen arribar en un rango de <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['tiempo'] : '30 a 60 minutos'); ?> desde la confirmación por WhatsApp."
      }
    },
    {
      "@type": "Question",
      "name": "¿El servicio en <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'mi zona'); ?> incluye boleta y garantía escrita?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sí. Entregamos boleta o factura formal y documento de garantía por escrito respaldando tanto la mano de obra profesional como los repuestos legítimos reemplazados."
      }
    },
    {
      "@type": "Question",
      "name": "¿Los técnicos que atienden en <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'mi comuna'); ?> están autorizados por la SEC?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Totalmente. Todo servicio es realizado bajo la supervisión de Domingo Isaín Plaza Caamaño, Instalador de Gas Clase 3 Autorizado por la SEC (RUT 12.738.961-6), garantizando cumplimiento estricto del Decreto Supremo 66."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tipo de gas y marcas atienden en <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'la zona'); ?>?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Atendemos redes de <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['gas'] : 'Gas Licuado y Gas Natural'); ?> y todas las marcas líderes del mercado chileno: Junkers, Bosch, Splendid, Mademsa, Neckar, Rheem, Ursus Trotter, Albin Trotter, Rinnai, Anwo, Beretta, Vaillant, Fensa y Sindelen."
      }
    }
  ]
}
</script>

<!-- Schema JSON-LD BreadcrumbList -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Inicio",
      "item": "https://centralcalefon.cl/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Servicio Técnico <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Chile'); ?>",
      "item": "<?php echo $canonicalUrl; ?>"
    }
  ]
}
</script>

<!-- Hero Section Localizado -->
<section style="background: radial-gradient(circle at 80% 20%, #1e293b 0%, #0f172a 60%, #020617 100%); color: #fff; padding: 4.5rem 0 3.5rem 0; border-bottom: 3px solid var(--color-flame); position: relative;">
  <div class="container">
    <div style="max-width: 860px; margin: 0 auto; text-align: center;">
      
      <!-- Badge de Certificación y Ubicación -->
      <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255, 94, 20, 0.15); border: 1px solid rgba(255, 94, 20, 0.4); padding: 0.45rem 1.15rem; border-radius: 999px; margin-bottom: 1.5rem;">
        <i class="fa-solid fa-certificate" style="color: #ff8c42;"></i>
        <span style="font-size: 0.88rem; font-weight: 800; color: #ff8c42; text-transform: uppercase; letter-spacing: 0.5px;">
          Técnicos Autorizados SEC • <?php echo htmlspecialchars($matchedComuna ? $matchedComuna['nombre'] : 'Cobertura Nacional'); ?>
        </span>
      </div>

      <!-- Título Principal H1 SEO -->
      <h1 style="font-family: var(--font-heading); font-size: clamp(2rem, 4vw, 3.2rem); font-weight: 900; line-height: 1.15; margin-bottom: 1.25rem; letter-spacing: -0.5px;">
        <?php echo htmlspecialchars($h1Title); ?>
      </h1>

      <p style="font-size: 1.15rem; color: #cbd5e1; line-height: 1.6; margin-bottom: 2rem;">
        <?php echo htmlspecialchars($h1Sub); ?>
      </p>

      <!-- Botones de Conversión Rápida -->
      <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 2.5rem;">
        <?php
          $waMsg = "Hola Central Calefón, solicito técnico a domicilio" . ($matchedComuna ? " en " . $matchedComuna['nombre'] : "");
          $waUrl = "https://wa.me/56932237072?text=" . urlencode($waMsg);
        ?>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-whatsapp btn-lg">
          <i class="fa-brands fa-whatsapp fa-xl"></i>
          <span>Pedir Técnico por WhatsApp</span>
        </a>
        <a href="tel:+56932237072" class="btn btn-phone btn-lg">
          <i class="fa-solid fa-phone"></i>
          <span>Llamar al 9 3223 7072</span>
        </a>
      </div>

      <!-- Métricas y Puntos de Confianza -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; text-align: left; background: rgba(255, 255, 255, 0.05); padding: 1.5rem; border-radius: var(--radius-lg); border: 1px solid rgba(255, 255, 255, 0.1);">
        <div style="display: flex; align-items: center; gap: 0.85rem;">
          <i class="fa-solid fa-truck-fast" style="font-size: 1.8rem; color: #ff8c42;"></i>
          <div>
            <div style="font-weight: 800; font-size: 0.95rem; color: #fff;">Tiempo de Respuesta</div>
            <div style="font-size: 0.82rem; color: #cbd5e1;"><?php echo htmlspecialchars($matchedComuna['tiempo']); ?> aprox.</div>
          </div>
        </div>

        <div style="display: flex; align-items: center; gap: 0.85rem;">
          <i class="fa-solid fa-id-card-clip" style="font-size: 1.8rem; color: #38bdf8;"></i>
          <div>
            <div style="font-weight: 800; font-size: 0.95rem; color: #fff;">Registro Oficial SEC</div>
            <div style="font-size: 0.82rem; color: #cbd5e1;">RUT: 12.738.961-6</div>
          </div>
        </div>

        <div style="display: flex; align-items: center; gap: 0.85rem;">
          <i class="fa-solid fa-fire-burner" style="font-size: 1.8rem; color: #4ade80;"></i>
          <div>
            <div style="font-weight: 800; font-size: 0.95rem; color: #fff;">Red de Gas Local</div>
            <div style="font-size: 0.82rem; color: #cbd5e1;">GLP Balón y Gas Natural</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Cobertura de Barrios y Sectores en la Comuna -->
<section style="padding: 3.5rem 0; background: #ffffff;">
  <div class="container">
    <div style="max-width: 900px; margin: 0 auto; background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 2.25rem;">
      <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem;">
        <div style="width: 48px; height: 48px; border-radius: 50%; background: #fee2e2; color: #c41230; display: flex; align-items: center; justify-content: center; font-size: 1.4rem;">
          <i class="fa-solid fa-map-location-dot"></i>
        </div>
        <div>
          <h2 style="font-family: var(--font-heading); font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin: 0;">
            Sectores Atendidos en <?php echo htmlspecialchars($matchedComuna['nombre']); ?> (<?php echo htmlspecialchars($matchedComuna['region']); ?>)
          </h2>
          <span style="font-size: 0.85rem; color: #64748b;">Móviles asignados permanentemente en tu sector:</span>
        </div>
      </div>
      <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 1.25rem;">
        <strong>Principales ejes y villas con cobertura inmediata:</strong> <?php echo htmlspecialchars($matchedComuna['sectores']); ?>.
      </p>
      <div style="font-size: 0.92rem; color: #0284c7; background: #e0f2fe; padding: 0.85rem 1.25rem; border-radius: var(--radius-md); display: flex; align-items: center; gap: 0.65rem;">
        <i class="fa-solid fa-circle-info"></i>
        <span><?php echo htmlspecialchars($matchedComuna['cobertura']); ?></span>
      </div>
    </div>
  </div>
</section>

<!-- Servicios Principales en Terreno -->
<section style="padding: 4.5rem 0; background: #f1f5f9; border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
  <div class="container">
    <div class="text-center" style="max-width: 750px; margin: 0 auto 3rem auto;">
      <span class="section-tag">Asistencia Inmediata</span>
      <h2 class="section-title">Servicios Técnicos en <?php echo htmlspecialchars($matchedComuna['nombre']); ?></h2>
      <p class="section-subtitle">
        Reparamos fallas de encendido, chispero, apagado repentino, falta de presión o fugas de agua y gas en el día:
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.75rem;">
      <!-- Tarjeta 1: Reparación Urgente -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: #fef2f2; color: #c41230; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 1.25rem;">
            <i class="fa-solid fa-wrench"></i>
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
            Reparación de Calefones Urgente
          </h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.25rem;">
            Diagnóstico con instrumental de medición y reemplazo de piezas dañadas en <?php echo htmlspecialchars($matchedComuna['nombre']); ?>:
          </p>
          <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; font-size: 0.88rem; color: #475569; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Cambio de membrana o diafragma de silicona</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Microswitch, sensor de ionización y termocupla</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Reparación de módulos electrónicos y electroválvulas</li>
          </ul>
        </div>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
          <i class="fa-brands fa-whatsapp"></i> Pedir Reparación
        </a>
      </div>

      <!-- Tarjeta 2: Mantención y Sarro -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: #eff6ff; color: #0284c7; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 1.25rem;">
            <i class="fa-solid fa-shower"></i>
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
            Mantención y Descalcificación de Sarro
          </h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.25rem;">
            Limpieza profunda del serpentín con bomba de recirculación química para eliminar incrustaciones calcáreas y recuperar la presión y temperatura.
          </p>
          <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; font-size: 0.88rem; color: #475569; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Descalcificación del serpentín de cobre</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Limpieza de quemadores e inyectores de gas</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Calibración de combustión limpia y ahorro de gas</li>
          </ul>
        </div>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-flame" style="width: 100%;">
          <i class="fa-solid fa-calendar-check"></i> Agendar Mantención
        </a>
      </div>

      <!-- Tarjeta 3: Instalación SEC -->
      <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.85rem; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <div style="width: 48px; height: 48px; border-radius: var(--radius-sm); background: #f0fdf4; color: #16a34a; display: flex; align-items: center; justify-content: center; font-size: 1.4rem; margin-bottom: 1.25rem;">
            <i class="fa-solid fa-award"></i>
          </div>
          <h3 style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
            Instalación Certificada SEC Norma DS 66
          </h3>
          <p style="color: #64748b; font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.25rem;">
            Montaje de calefones de tiro natural, tiro forzado o eléctricos conforme a las exigencias legales y de ventilación dictadas por la SEC en <?php echo htmlspecialchars($matchedComuna['nombre']); ?>.
          </p>
          <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; font-size: 0.88rem; color: #475569; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Conexión de cañería con llave de paso reglamentaria</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Ducto de evacuación de monóxido y sombrerete</li>
            <li><i class="fa-solid fa-circle-check" style="color: #16a34a; margin-right: 6px;"></i> Prueba de hermeticidad certificada libre de fugas</li>
          </ul>
        </div>
        <a href="<?php echo $waUrl; ?>" target="_blank" class="btn btn-whatsapp" style="width: 100%;">
          <i class="fa-solid fa-file-signature"></i> Cotizar Instalación
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     SECCIÓN TRABAJO REAL EN TERRENO (CIERRE DE VENTA CON VIDEO INTERACTIVO)
     "añade esa seccion del video que creamos recien en todas las paginas internas porque es definitorio"
     ========================================================================== -->
<section class="field-service-section" id="trabajo-terreno">
  <div class="container">
    <div class="field-service-grid">
      <!-- Columna Izquierda: Nuestros Servicios / Explicación Técnica -->
      <div class="field-service-content">
        <span class="section-tag" style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255, 107, 0, 0.15); color: #ff8c42; border-color: rgba(255, 107, 0, 0.3);">
          <i class="fa-solid fa-screwdriver-wrench"></i> Procedimiento Técnico en <?php echo htmlspecialchars($matchedComuna['nombre']); ?>
        </span>
        <h2 class="section-title" style="text-align: left; margin-bottom: 1.25rem; color: #ffffff;">
          Técnicos SEC en Acción: <span class="highlight-flame">Diagnóstico y Reparación</span> Directa
        </h2>
        <p class="field-service-desc">
          Así opera nuestro equipo profesional en cada visita domiciliaria en <?php echo htmlspecialchars($matchedComuna['nombre']); ?>: inspección exhaustiva de circuitos de gas, flexibles de agua, llaves de paso, quemadores y sistemas de tiro bajo estricta normativa <strong>Decreto Supremo 66</strong>.
        </p>

        <!-- Lista de estándares de servicio -->
        <div class="field-service-list">
          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
            <div>
              <h4>Diagnóstico y Detección de Fugas</h4>
              <p>Revisión con instrumental calibrado de estanqueidad, presión de gas dinámica y estado de las redes.</p>
            </div>
          </div>

          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-gears"></i></div>
            <div>
              <h4>Repuestos Legítimos In-Situ</h4>
              <p>Cambio inmediato de diafragmas de silicona, serpentines, termocuplas y electroválvulas en el lugar.</p>
            </div>
          </div>

          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-shield-halved"></i></div>
            <div>
              <h4>Certificación SEC y Seguridad</h4>
              <p>Atención directa por gasfíter autorizado con registro visible y comprobable en el portal oficial SEC.cl.</p>
            </div>
          </div>

          <div class="field-service-item">
            <div class="field-item-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
            <div>
              <h4>Garantía Escrita y Boleta/Factura</h4>
              <p>Respaldo formal de todos los trabajos realizados para tu total tranquilidad y la de tu familia.</p>
            </div>
          </div>
        </div>

        <!-- Botones de Acción Directa -->
        <div class="field-cta-group">
          <a href="<?php echo $waUrl; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-lg">
            <i class="fa-brands fa-whatsapp fa-xl"></i>
            <span>Pedir Técnico en <?php echo htmlspecialchars($matchedComuna['nombre']); ?></span>
          </a>
          <a href="tel:+56932237072" class="btn btn-phone btn-lg">
            <i class="fa-solid fa-phone"></i>
            <span>Llamar 9 3223 7072</span>
          </a>
        </div>
      </div>

      <!-- Columna Derecha: Video Interactivo con Autoplay, Loop y Control de Sonido -->
      <div class="field-video-wrapper">
        <div class="field-video-card" title="Toca para pausar o reanudar el video">
          <!-- Tag flotante superior -->
          <div class="field-video-badge">
            <span class="live-indicator"></span> Registro Real en Terreno
          </div>

          <!-- Video HTML5 Optimizado -->
          <video class="field-video-player" autoplay loop muted playsinline poster="assets/videos/hero-poster.webp" preload="metadata">
            <source src="assets/videos/trabajo-terreno.mp4" type="video/mp4">
            Tu navegador no soporta video HTML5.
          </video>

          <!-- Control Flotante de Audio / Mute -->
          <div class="field-video-controls">
            <button type="button" class="video-audio-toggle-btn" aria-label="Activar o silenciar audio del video">
              <i class="fa-solid fa-volume-xmark"></i>
              <span class="audio-btn-label">Toca para escuchar</span>
            </button>
            <span class="video-sub-hint"><i class="fa-solid fa-rotate"></i> Loop continuo</span>
          </div>
        </div>

        <!-- Callout inferior de confianza -->
        <div class="field-video-footer-hint">
          <i class="fa-solid fa-circle-check" style="color: #10b981;"></i>
          <span>Móviles equipados con herramientas e insumos para solucionar tu avería en una sola visita.</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Marcas Multimarca Atendidas -->
<section style="padding: 3.5rem 0; background: #f8fafc; border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
  <div class="container text-center">
    <span class="section-tag">Cobertura de Fabricantes</span>
    <h2 class="section-title">Reparamos Todas las Marcas en <?php echo htmlspecialchars($matchedComuna['nombre']); ?></h2>
    <p class="section-subtitle" style="margin-bottom: 2rem;">
      Contamos con catálogo y repuestos de alta rotación para modelos analógicos, ionizados automáticos y digitales:
    </p>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 0.75rem; max-width: 900px; margin: 0 auto 2rem auto;">
      <?php
      $marcas = [
          'Junkers', 'Bosch', 'Splendid', 'Mademsa', 'Neckar', 'Rheem',
          'Ursus Trotter', 'Albin Trotter', 'Rinnai', 'Anwo', 'Beretta',
          'Vaillant', 'Fensa', 'Sindelen', 'Teka', 'Midea', 'Haier'
      ];
      foreach ($marcas as $m):
      ?>
        <span style="background: #ffffff; border: 1px solid var(--color-border); padding: 0.5rem 1.15rem; border-radius: var(--radius-full); font-weight: 700; font-size: 0.9rem; color: var(--color-primary); box-shadow: var(--shadow-sm);">
          <?php echo $m; ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Preguntas Frecuentes FAQ con Schema -->
<section style="padding: 4.5rem 0; background: #ffffff;">
  <div class="container" style="max-width: 800px;">
    <div class="text-center" style="margin-bottom: 2.5rem;">
      <span class="section-tag">Dudas Habituales</span>
      <h2 class="section-title">Preguntas Frecuentes sobre Servicio en <?php echo htmlspecialchars($matchedComuna['nombre']); ?></h2>
    </div>

    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
      <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">
          ¿Cuánto tarda en llegar el técnico a <?php echo htmlspecialchars($matchedComuna['nombre']); ?>?
        </h3>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Coordinamos visitas en el mismo día. Dependiendo del sector de <?php echo htmlspecialchars($matchedComuna['nombre']); ?>, nuestros móviles suelen arribar en un rango de <?php echo htmlspecialchars($matchedComuna['tiempo']); ?> desde la confirmación por WhatsApp.
        </p>
      </div>

      <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">
          ¿El servicio incluye boleta y garantía formal por escrito?
        </h3>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Sí. Entregamos boleta o factura legal y documento de garantía formal que respalda tanto la mano de obra como las piezas reemplazadas en tu equipo.
        </p>
      </div>

      <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">
          ¿Los técnicos están acreditados ante la SEC en <?php echo htmlspecialchars($matchedComuna['region']); ?>?
        </h3>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          Absolutamente. Todo servicio es realizado y supervisado por Domingo Isaín Plaza Caamaño, Instalador de Gas Clase 3 Autorizado por la SEC (RUT 12.738.961-6), habilitado conforme a la legislación vigente DS 66.
        </p>
      </div>

      <div style="background: #f8fafc; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.5rem;">
        <h3 style="font-family: var(--font-heading); font-size: 1.1rem; color: var(--color-primary); font-weight: 700; margin-bottom: 0.5rem;">
          ¿Qué tipo de gas tienen los calefones atendidos en <?php echo htmlspecialchars($matchedComuna['nombre']); ?>?
        </h3>
        <p style="color: #64748b; font-size: 0.95rem; line-height: 1.6; margin: 0;">
          En <?php echo htmlspecialchars($matchedComuna['nombre']); ?> atendemos <?php echo htmlspecialchars($matchedComuna['gas']); ?>. Realizamos calibración de presiones y conversión de inyectores si cambias de tipo de gas.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Directorio de Enlazado Interno a Otras Comunas y Regiones de Chile -->
<section style="padding: 3.5rem 0; background: #0f172a; color: #fff; border-top: 1px solid #1e293b;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 2rem;">
      <h3 style="font-family: var(--font-heading); font-size: 1.25rem; color: #fff; font-weight: 800; margin-bottom: 0.5rem;">
        Red de Cobertura y Otras Zonas Atendidas en Chile
      </h3>
      <p style="font-size: 0.88rem; color: #94a3b8;">
        Disponemos de móviles técnicos equipados con repuestos legítimos en las siguientes comunas:
      </p>
    </div>

    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: center; font-size: 0.82rem; max-width: 1000px; margin: 0 auto;">
      <?php foreach ($comunasData as $k => $c): ?>
        <a href="servicio-tecnico-calefon-<?php echo $k; ?>" style="color: #cbd5e1; background: #1e293b; padding: 5px 12px; border-radius: 999px; text-decoration: none; border: 1px solid #334155; transition: all 0.2s;" onmouseover="this.style.color='#ffffff'; this.style.backgroundColor='#ff5e14'; this.style.borderColor='#ff5e14';" onmouseout="this.style.color='#cbd5e1'; this.style.backgroundColor='#1e293b'; this.style.borderColor='#334155';">
          <?php echo htmlspecialchars($c['nombre']); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
// Incluir footer global
require_once __DIR__ . '/includes/footer.php';
?>
