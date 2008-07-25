<?php

require_once MAX_PATH . '/extensions/deliveryLog/logCommon.php';

class Plugins_DeliveryLog_OxLogRequest_LogRequest extends Plugins_DeliveryLog_LogCommon
{
    function getDependencies()
    {
        return array(
            'deliveryLog:oxLogRequest:logRequest' => array(
                'deliveryDataPrepare:oxDeliveryDataPrepare:dataCommon',
            )
        );
    }

    function getBucketName()
    {
        return 'data_bucket_request';
    }

    public function getTableBucketColumns()
    {
        $columns = array(
            'interval_start' => self::TIMESTAMP_WITHOUT_ZONE,
            'creative_id' => self::INTEGER,
            'zone_id' => self::INTEGER,
            'count' => self::INTEGER
        );
    }
}

?>