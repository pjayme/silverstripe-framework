<?php
/**
 * Selects numerical/date content smaller than the input
 *
 * @todo documentation
 * 
 * @package sapphire
 * @subpackage search
 */
class SmallerThanFilter extends SearchFilter {
	
	/**
	 * @return $query
	 */
	public function apply(SQLQuery $query) {
		if($this->getValue()) {
			$query = $this->applyRelation($query);
			return $query->where("{$this->getDbName()} < '{$this->getValue()}'");
		}
	}
	
}
?>