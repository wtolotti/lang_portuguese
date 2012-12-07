<?php

	class extension_lang_portuguese extends Extension {

		/**
		 * Extension information
		 */

		public function about() {
			return array(
				'name' => __('Language: Portuguese (Brazil and Portugal)'),
				'type' => 'Localisation',
				'version' => '0.9',
				'release-date' => '2012-12-07',
				'author' => array(
					'name' => 'Marcio Toledo',
					'website' => 'http://pierrebertet.net/',
					'email' => 'bonjour@pierrebertet.net'
				),
				'description' => __('French translation for the Symphony backend'),
				'compatibility' => array(
					'2.3' => true,
					'2.3.1' => true
				)
			);
		}
	}