<?php

class Swisspost_YellowCube_Model_Queue_Message_Handler_Action_Processor_Deactivate
    extends Swisspost_YellowCube_Model_Queue_Message_Handler_Action_Processor_Insert
    implements Swisspost_YellowCube_Model_Queue_Message_Handler_Action_ProcessorInterface
{
    protected $_changeFlag = \YellowCube\ART\ChangeFlag::DEACTIVATE;
}
