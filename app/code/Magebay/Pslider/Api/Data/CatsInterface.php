<?php
/**
=====================================================
			     -:- Z-Programing -:-
-----------------------------------------------------
 * @PROJECT	: Product Slider Pro [ Magebay.com ]
 * @AUTHOR	: Zuko
 * @FILE	: CatsInterface.php
 * @CREATED	: 8:11 AM , 22/02/2016
 * @DETAIL	: 
-----------------------------------------------------
=====================================================
**/



namespace Magebay\Pslider\Api\Data;


interface CatsInterface {

    const ID = 'cats_id';
    const TITLE = 'title';
    const LAYOUT = 'layout';
    const INFO = 'info';
    const STATUS = 'status';
    const CREATE_TIME = 'create_time';
    const UPDATE_TIME = 'update_time';

    /**
     * setters
     */
    public function getId();
    public function getTitle();
    public function getLayout();
    public function getInfo();
    public function getStatus();
    public function getCreateTime();
    public function getUpdateTime();
    /**
     * Setters
     */
    public function setId($id);
    public function setTitle($title);
    public function setLayout($layout);
    public function setInfo($info);
    public function setStatus($status);
    public function setCreateTime($create_time);
    public function setUpdateTime($update_time);
}