<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4/job_service.proto

namespace Google\Cloud\Talent\V4;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update a batch of jobs.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4.BatchUpdateJobsRequest</code>
 */
class BatchUpdateJobsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The jobs to be updated.
     * A maximum of 200 jobs can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.Job jobs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $jobs;
    /**
     * Strongly recommended for the best service experience. Be aware that it will
     * also increase latency when checking the status of a batch operation.
     * If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     * is provided, only the specified fields in [Job][google.cloud.talent.v4.Job]
     * are updated. Otherwise all the fields are updated.
     * A field mask to restrict the fields that are updated. Only
     * top level fields of [Job][google.cloud.talent.v4.Job] are supported.
     * If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     * is provided, The [Job][google.cloud.talent.v4.Job] inside
     * [JobResult][google.cloud.talent.v4.JobResult]
     * will only contains fields that is updated, plus the Id of the Job.
     * Otherwise,  [Job][google.cloud.talent.v4.Job] will include all fields,
     * which can yield a very large response.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;

    /**
     * @param string                        $parent Required. The resource name of the tenant under which the job is created.
     *
     *                                              The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     *                                              "projects/foo/tenants/bar". Please see
     *                                              {@see JobServiceClient::tenantName()} for help formatting this field.
     * @param \Google\Cloud\Talent\V4\Job[] $jobs   Required. The jobs to be updated.
     *                                              A maximum of 200 jobs can be updated in a batch.
     *
     * @return \Google\Cloud\Talent\V4\BatchUpdateJobsRequest
     *
     * @experimental
     */
    public static function build(string $parent, array $jobs): self
    {
        return (new self())
            ->setParent($parent)
            ->setJobs($jobs);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the tenant under which the job is created.
     *           The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     *           "projects/foo/tenants/bar".
     *     @type array<\Google\Cloud\Talent\V4\Job>|\Google\Protobuf\Internal\RepeatedField $jobs
     *           Required. The jobs to be updated.
     *           A maximum of 200 jobs can be updated in a batch.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Strongly recommended for the best service experience. Be aware that it will
     *           also increase latency when checking the status of a batch operation.
     *           If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     *           is provided, only the specified fields in [Job][google.cloud.talent.v4.Job]
     *           are updated. Otherwise all the fields are updated.
     *           A field mask to restrict the fields that are updated. Only
     *           top level fields of [Job][google.cloud.talent.v4.Job] are supported.
     *           If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     *           is provided, The [Job][google.cloud.talent.v4.Job] inside
     *           [JobResult][google.cloud.talent.v4.JobResult]
     *           will only contains fields that is updated, plus the Id of the Job.
     *           Otherwise,  [Job][google.cloud.talent.v4.Job] will include all fields,
     *           which can yield a very large response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}". For example,
     * "projects/foo/tenants/bar".
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The jobs to be updated.
     * A maximum of 200 jobs can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.Job jobs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Required. The jobs to be updated.
     * A maximum of 200 jobs can be updated in a batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4.Job jobs = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Cloud\Talent\V4\Job>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4\Job::class);
        $this->jobs = $arr;

        return $this;
    }

    /**
     * Strongly recommended for the best service experience. Be aware that it will
     * also increase latency when checking the status of a batch operation.
     * If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     * is provided, only the specified fields in [Job][google.cloud.talent.v4.Job]
     * are updated. Otherwise all the fields are updated.
     * A field mask to restrict the fields that are updated. Only
     * top level fields of [Job][google.cloud.talent.v4.Job] are supported.
     * If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     * is provided, The [Job][google.cloud.talent.v4.Job] inside
     * [JobResult][google.cloud.talent.v4.JobResult]
     * will only contains fields that is updated, plus the Id of the Job.
     * Otherwise,  [Job][google.cloud.talent.v4.Job] will include all fields,
     * which can yield a very large response.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Strongly recommended for the best service experience. Be aware that it will
     * also increase latency when checking the status of a batch operation.
     * If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     * is provided, only the specified fields in [Job][google.cloud.talent.v4.Job]
     * are updated. Otherwise all the fields are updated.
     * A field mask to restrict the fields that are updated. Only
     * top level fields of [Job][google.cloud.talent.v4.Job] are supported.
     * If [update_mask][google.cloud.talent.v4.BatchUpdateJobsRequest.update_mask]
     * is provided, The [Job][google.cloud.talent.v4.Job] inside
     * [JobResult][google.cloud.talent.v4.JobResult]
     * will only contains fields that is updated, plus the Id of the Job.
     * Otherwise,  [Job][google.cloud.talent.v4.Job] will include all fields,
     * which can yield a very large response.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

