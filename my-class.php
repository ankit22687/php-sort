<?php
class MyClass
{
    /**
     * Sort array based on the key
     * @param $people
     * @param $orderby
     */
    public function sortArrayByAgeDesc($people, $orderby = 'age')
    {
        if (!is_array($people)) {
            return;
        }
        foreach ($people as $snKey => $ssValue) {
            $people[$snKey]['name'] = $people[$snKey]['first_name'].' '.$people[$snKey]['last_name'];
        }
        array_multisort(array_column($people, $orderby), SORT_DESC, $people);
        return $people;
    }

    /**
     * get all the emails with comma separated value
     * @param $data
     */
    public function implodeEmail($data)
    {
        $asData = array_column($data, 'email');
        return $emails = implode(', ', $asData);
    }

    /**
     * Quick sort between indexes of array
     * @param $amArray
     * @param $keyToCompare
     * @param $start
     * @param $last
     */
    public function quickSort(&$amArray, $keyToCompare, $start = 0, $last = null)
    {
        
        // Init
        $side = $start;
        $last = is_null($last) ? count($amArray) - 1 : $last;
        
        // Nothing to sort
        if ($last - $start < 1) {
            return;
        }
        
        // Moving median value
        $this->switchValues($amArray, (int) (($start + $last) / 2), $last);
        
        // Splitting the array according to comparisons with the last value
        for ($i = $start; $i < $last; $i++) {
            if ($amArray[$i][$keyToCompare] > $amArray[$last][$keyToCompare]) {
                $this->switchValues($amArray, $i, $side);
                $side++;
            }
        }
        
        // Placing last value between the two split arrays
        $this->switchValues($amArray, $side, $last);
        // echo 12;
        // exit;
    
        // Sorting left of the side
        $this->quickSort($amArray, $keyToCompare, $start, $side - 1);
        
        // Sorting right of the side
        $this->quickSort($amArray, $keyToCompare, $side + 1, $last);
    }
    
    /**
     * Switch two values identified by keys $i1 and $i2 of $amArray
     * @param $i1
     * @param $i2
     */
    public function switchValues(&$amArray, $i1, $i2)
    {
        if ($i1 !== $i2) {
            $temp = $amArray[$i1];
            $amArray[$i1] = $amArray[$i2];
            $amArray[$i2] = $temp;
        }
    }

    /**
     * add new key 'name' to array
     * @param $amArray
     */
    public function addNameToArray($amArray)
    {
        if (!is_array($amArray)) {
            return;
        }
        foreach ($amArray as $snKey => $ssValue) {
            $amArray[$snKey]['name'] = $amArray[$snKey]['first_name'].' '.$amArray[$snKey]['last_name'];
        }
        return $amArray;
    }
}
