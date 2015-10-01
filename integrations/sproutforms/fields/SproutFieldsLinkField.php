<?php
namespace Craft;

/**
 * Class SproutFieldLinkField
 *
 * @package Craft
 */
class SproutFieldLinkField extends SproutFieldsBaseField
{
	/**
	 * @return string
	 */
	public function getType()
	{
		return 'SproutFields_Link';
	}

	/**
	 * @param FieldModel $field
	 * @param mixed      $value
	 * @param mixed      $settings
	 * @param array|null $renderingOptions
	 *
	 * @return \Twig_Markup
	 */
	public function getInputHtml($field, $value, $settings, array $renderingOptions = null)
	{
		$this->beginRendering();

		$rendered = craft()->templates->render(
			'link/input',
			array(
				'name'             => $field->handle,
				'value'            => $value,
				'field'            => $field,
				'renderingOptions' => $renderingOptions
			)
		);

		$this->endRendering();

		return TemplateHelper::getRaw($rendered);
	}
}