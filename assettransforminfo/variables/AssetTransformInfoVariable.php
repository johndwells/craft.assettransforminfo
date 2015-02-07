<?php namespace Craft;

/**
 * Asset Transform Info by John D Wells
 *
 * @author     	John D Wells <http://johndwells.com>
 * @package    	Asset Transform Info
 * @since		Craft 2.3
 * @copyright 	Copyright (c) 2014, John D Wells
 * @license 	http://opensource.org/licenses/mit-license.php MIT License
 * @link       	http://github.com/johndwells/craft.transforminfo
 */

/**
 * 
 */
class AssetTransformInfoVariable
{
	/**
	 * Our {{ craft.assettransforminfo.getByHandle() }} variable tag
	 *
	 * @param String $handle
	 * @return Craft\AssetTransformModel or null
	 */
	public function getByHandle($handle)
	{
		return craft()->assetTransforms->getTransformByHandle($handle) ?: null;
	}
}