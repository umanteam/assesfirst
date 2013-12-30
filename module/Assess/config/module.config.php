<?php 
return array(
     'controllers' => array(
         'invokables' => array(
             'Assess\Controller\Assess' => 'Assess\Controller\AssessController',
         ),
     ),
      'router' => array(
         'routes' => array(
             'assess' => array(
                 'type'    => 'segment',
                 'options' => array(
                     'route'    => '/assess[/][:action][/:id]',
                     'constraints' => array(
                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                         'id'     => '[0-9]+',
                     ),
                     'defaults' => array(
                         'controller' => 'Assess\Controller\Assess',
                         'action'     => 'managerhome',
                     ),
                 ),
             ),
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'assess' => __DIR__ . '/../view',
         ),
     ),
 );