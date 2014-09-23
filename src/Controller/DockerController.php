<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Error;
use Cake\Utility\Inflector;

use Docker;

/**
 * Static content controller
 */
class DockerController extends AppController {

	public function images(){

		$client = new Docker\Http\DockerClient(array(),'tcp://192.168.33.1:4243');
		$docker = new Docker\Docker($client);

		$manager = $docker->getImageManager();

		$images = [];

		foreach ($manager->findAll() as $image) {

			//Assemble image
		    $images[] = [
		    	'repository'	=>	$image->getRepository(),
		    	'tag'			=>	$image->getTag(),
		    	'id'			=>	$image->getId()
		    ];

		}

		$this->set('images',$images);
	}

	public function containers(){

		$client = new Docker\Http\DockerClient(array(),'tcp://192.168.33.1:4243');
		$docker = new Docker\Docker($client);

		$manager = $docker->getContainerManager();

		$containers = [];

		foreach ($manager->findAll() as $container) {

			//Assemble container
		    $containers[] = [
		    	'id'		=>	substr($container->getId(),0,11),
		    	'image'		=>	$container->getData()["Image"],
		    	'command'	=>	implode(' ',$container->getConfig()["Cmd"]),
		    	'created'	=>	date('d-m-Y H:i:s',$container->getData()["Created"]),
		    	'status'	=>	$container->getData()["Status"],
		    	'ports'		=>	implode(', ',$container->getMappedPorts()),
		    	'names'		=>	implode(', ',$container->getData()["Names"]),
		    ];

		}

		$this->set('containers',$containers);
	}
}
