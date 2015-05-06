<?php
/**
 * Created by LYNX Technology Development
 * User: LYNXTDC
 * Date: 1/15/2015
 * Time: 9:37 PM
 * http://lynxtdc.com
 */

namespace LTDC\Extensions\Html;
use Illuminate\Html\FormBuilder as IllumniateFormBuilder;

class FormBuilder extends IllumniateFormBuilder {

    /**
     * @param $name - name of element for form submission
     * @param $type - type of element (HTML5 input type)
     * @param null $value - value (set to Input::old('NAME_OF_FIELD) for use with validation)
     * @param null $labelText - Label Text, if null, label construct will be omitted
     * @param null $placeholder - Placeholder text
     * @param null $label_class - Label class, if Label Text omitted, used as inner div class
     * @param null $input_class - Class(es) for input element
     * @param null $input_id - ID for input element
     * @param null $errors - Laravel Error Bag object
     * @param bool $innerOnly - Does this construct have an outer div set
     * @return string
     */
    public function ltdcInput($name, $type, $value = null, $labelText = null,  $placeholder = null, $label_class = null, $input_class = null, $input_id = null, $errors = null, $innerOnly = false)
    {
        $errorBlock=''; $extraClass='';
        if (is_object($errors) && $errors->first($name)){
            $errorBlock = '<span class="has-error help-block pull-right">'.$errors->first($name).'</span><br />';
            $extraClass = ' error';
        }

        $label = '';
        if ($labelText){
            $label = '<label for=' . $name . ' class="' . $label_class . '">' . $labelText . '</label>';
        }

        $input = '<input class="' . $input_class . $extraClass . '" id="' . $input_id . '" type=' . $type . ' placeholder="' . $placeholder . '" name="' . $name . '" value="'.$value.'">';

        $outerTop = '<div class="form-group row">';
        $outerBottom = '</div>';
        $innerTop = '<div class="col-sm-8">';
        $innerBottom = '</div>';
        if ($innerOnly){
            $outerTop = '';
            $outerBottom = '';
            $innerTop = '<div class="'.$label_class.'">';
        }

        $item = <<<HTML
            $outerTop
                $label
                $innerTop
                      $input
                      $errorBlock
                $innerBottom
            $outerBottom
HTML;
        return $item;
    }

    /**
     * Create select control for US States using the State Abbreviation as the returned option value
     *
     * @param string $name - name of select
     * @param string $text - display value for label (if we have one)
     * @param string $selected - value of selected item
     * @param bool $hasLabel - do we need to construct a label for this structure
     * @param bool $hasWrapper - do we need the outer div wrappers
     * @param null $label_class - classes for the label
     * @param null $input_class - classes for the select
     * @param null $errors - Laravel Error Bag object
     * @return string
     */
    public function ltdcStateSelect_Abb ($name = "state", $text = null, $selected = null, $hasLabel=true, $hasWrapper=true, $label_class = null, $input_class = null, $inner_wrapper_class = null, $errors = null) {
        $states = [
            '' => "",
            'AL' => "Alabama",
            'AK' => "Alaska",
            'AZ' => "Arizona",
            'AR' => "Arkansas",
            'CA' => "California",
            'CO' => "Colorado",
            'CT' => "Connecticut",
            'DE' => "Delaware",
            'DC' => "District Of Columbia",
            'FL' => "Florida",
            'GA' => "Georgia",
            'HI' => "Hawaii",
            'ID' => "Idaho",
            'IL' => "Illinois",
            'IN' => "Indiana",
            'IA' => "Iowa",
            'KS' => "Kansas",
            'KY' => "Kentucky",
            'LA' => "Louisiana",
            'ME' => "Maine",
            'MD' => "Maryland",
            'MA' => "Massachusetts",
            'MI' => "Michigan",
            'MN' => "Minnesota",
            'MS' => "Mississippi",
            'MO' => "Missouri",
            'MT' => "Montana",
            'NE' => "Nebraska",
            'NV' => "Nevada",
            'NH' => "New Hampshire",
            'NJ' => "New Jersey",
            'NM' => "New Mexico",
            'NY' => "New York",
            'NC' => "North Carolina",
            'ND' => "North Dakota",
            'OH' => "Ohio",
            'OK' => "Oklahoma",
            'OR' => "Oregon",
            'PA' => "Pennsylvania",
            'RI' => "Rhode Island",
            'SC' => "South Carolina",
            'SD' => "South Dakota",
            'TN' => "Tennessee",
            'TX' => "Texas",
            'UT' => "Utah",
            'VT' => "Vermont",
            'VA' => "Virginia",
            'WA' => "Washington",
            'WV' => "West Virginia",
            'WI' => "Wisconsin",
            'WY' => "Wyoming"
        ];

        $label='';
        if($hasLabel){
            $label = $label = '<label for='.$name.' class="'.$label_class.'">'.$text.'</label>';
        }

        $errorBlock=''; $extraClass='';
        if (is_object($errors) && $errors->first($name)){
            $errorBlock = '<span class="has-error help-block pull-right">'.$errors->first($name).'</span><br />';
            $extraClass = ' error';
        }

        $wrapperTop='';$wrapperBottom='';
        if($hasWrapper){
            $wrapperTop='<div class="form-group form-group-sm">';
            $wrapperBottom='</div>';
        }

        $innerWrapperTop = '<div class="col-sm-8">';
        $innerWrapperBottom = '</div>';
        if ($inner_wrapper_class){
            $innerWrapperTop = '<div class="'.$inner_wrapper_class.'">';
        }


        $input = '<select class="'.$input_class.$extraClass.'" id="'.$name.'" name="'.$name.'">';
        $options='<option value=""></option>';
        foreach ($states as $index=>$value){
            $isSelected = ($selected==$value) ? '"selected"' : '';
            $options.='<option value="'.$index.'" '.$selected .'>'.$value.'</option>';
        }
        $input.=$options.'</select>';

        $item = <<<HTML
            $wrapperTop
                $label
                $innerWrapperTop
                      $input
                      $errorBlock
                $innerWrapperBottom
            $wrapperBottom
HTML;
        return $item;
    }

    public function ltdcSelectRange($name, $start, $end, $selected = null, $input_class = null)
    {
        $input = '<select class="'.$input_class.'" id="'.$name.'" name="'.$name.'">';

        $options = '<option value=""></option>';
        for($i=$start;$i<$end;$i++) {
            $isSelected = ($selected==$i) ? '"selected"' : '';
            $options .= '<option value="' . $i . '" '.$selected .'>' . $i . '</option>';
        }

        $input.=$options.'</select>';

        $item = <<<HTML
            $input
HTML;
        return $item;

    }

}
