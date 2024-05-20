<?php

namespace App\Models;

use CodeIgniter\Model;

class AgentModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'agent';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'agent_id',
        'Agentfullname',
        'birthday',
        'rank',
        'branch',
        'username',
        'address',
        'AgentCode',
        'FA',
        'email',
        'agentprofile',
        'number',
        'agent_token',
        'firstname',
        'lastname',
        'middlename',
        'region',
        'province',
        'city',
        'barangay',
        'street',
        'zipcode'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];
}
