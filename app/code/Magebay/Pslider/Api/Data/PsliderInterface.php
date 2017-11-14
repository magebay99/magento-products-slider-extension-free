<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: PsliderInterface.php
 * @CREATED	: 7:58 AM , 22/02/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Api\Data;


interface PsliderInterface {
    const ID = 'pslider_id';
    const TITLE = 'title';
    const DESC = 'description';
    const CATEGORY_ID = 'category_id';
    const TYPE_ID = 'type_id';
    const CATS_ID = 'cats_id';
    const POS = 'position';
    const STATUS = 'status';
    const CREATE_TIME = 'create_time';
    const UPDATE_TIME = 'update_time';

    public function getId();
    public function getTitle();
    public function getDesc();
    public function getCategoryId();
    public function getTypeId();
    public function getCatsId();
    public function getPos();
    public function getStatus();
    public function getCreateTime();
    public function getUpdateTime();

    public function setId($id);
    public function setTitle($title);
    public function setDesc($desc);
    public function setCategoryId($category_id);
    public function setTypeId($type_id);
    public function setCatsId($cats_id);
    public function setPos($pos);
    public function setStatus($status);
    public function setCreateTime($create_time);
    public function setUpdateTime($update_time);
}