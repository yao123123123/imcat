<?php
$_notea = array (
  'kid' => 'notea',
  'pid' => 'coms',
  'title' => '站务笔记',
  'enable' => '1',
  'etab' => '0',
  'deep' => '1',
  'f' => 
  array (
    'title' => 
    array (
      'kid' => 'title',
      'title' => '标题',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'tit:2-60',
      'vtip' => '标题2-60字符',
      'vmax' => '60',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'leixing' => 
    array (
      'kid' => 'leixing',
      'title' => '类型',
      'etab' => '0',
      'type' => 'radio',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => 't124',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 't124=学习
t128=工作
t132=生活
t136=休闲
t148=临时',
    ),
    'detail' => 
    array (
      'kid' => 'detail',
      'title' => '内容',
      'etab' => '0',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'str:10+',
      'vtip' => '内容10字符以上',
      'vmax' => '0',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'reply' => 
    array (
      'kid' => 'reply',
      'title' => '附加',
      'etab' => '0',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mname' => 
    array (
      'kid' => 'mname',
      'title' => '昵称',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'nul:str:2-24',
      'vtip' => '2-24字符',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
  ),
);
?>