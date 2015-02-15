<?php

namespace Fusio\Backend\Schema\Log;

use PSX\Data\SchemaAbstract;

/**
 * Collection
 *
 * @see http://phpsx.org/doc/concept/schema.html
 */
class Collection extends SchemaAbstract
{
	public function getDefinition()
	{
		$sb = $this->getSchemaBuilder('collection');
		$sb->integer('totalItems');
		$sb->integer('startIndex');
		$sb->arrayType('entry')
			->setPrototype($this->getSchema('Fusio\Backend\Schema\Log'));

		return $sb->getProperty();
	}
}

