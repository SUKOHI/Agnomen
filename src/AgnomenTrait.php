<?php namespace Sukohi\Agnomen;

trait AgnomenTrait {

	// Override
	protected function getValidatorInstance()
	{
		$validator = parent::getValidatorInstance();

		if(is_array($this->attribute_names)) {

			$validator->setAttributeNames($this->attribute_names);

		}

		return $validator;
	}

}