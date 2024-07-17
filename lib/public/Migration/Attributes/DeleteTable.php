<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2024 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */
namespace OCP\Migration\Attributes;

use Attribute;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
class DeleteTable extends MigrationAttribute {
	public function definition(): string {
		return empty($this->getTable()) ? 'Deletion of a table' : 'Deletion of table \'' . $this->getTable() . '\'';
	}
}
