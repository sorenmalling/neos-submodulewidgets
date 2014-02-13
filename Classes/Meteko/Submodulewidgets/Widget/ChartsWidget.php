<?php

namespace Meteko\Submodulewidgets\Widget;

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Fluid\View\StandaloneView;
use TYPO3\Neos\Controller\Module\SubmoduleWidgetInterface;

class ChartsWidget implements SubmoduleWidgetInterface {

	/**
	 * @Flow\Inject
	 * @var \TYPO3\Flow\Package\PackageManagerInterface
	 */
	protected $packageManager;

	/**
	 * Render submodule widget content
	 *
	 * @param array $widgetConfiguration Submodule configuration
	 *
	 * @return string
	 */
	public function render($widgetConfiguration) {
		#$availablePackages = $this->packageManager->getAvailablePackages();
		#$packages = array();
		/** @var $package \TYPO3\Flow\Package\PackageInterface */
		/*foreach ($availablePackages as $package) {
			$packages[$package->getPackageKey()] = array(
				'isActive' => $this->packageManager->isPackageActive($package->getPackageKey()),
				'name' => $package->getComposerManifest('name')
			);
		}*/
		$view = new StandaloneView();
		$view->setTemplatePathAndFilename('resource://Meteko.Submodulewidgets/Private/Templates/Widget/Charts.html');
		return $view->render();
	}

}