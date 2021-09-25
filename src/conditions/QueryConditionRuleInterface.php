<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace craft\conditions;

use yii\db\QueryInterface;

/**
 * QueryConditionRuleInterface defines the common interface to be implemented by query condition rule classes.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since 4.0.0
 */
interface QueryConditionRuleInterface extends ConditionRuleInterface
{
    /**
     * Returns the query param names that this rule should have exclusive control over.
     *
     * @return string[]
     */
    public static function exclusiveQueryParams(): array;

    /**
     * Modifies the given query with the condition rule.
     *
     * @param QueryInterface $query
     * @return void
     */
    public function modifyQuery(QueryInterface $query): void;
}
