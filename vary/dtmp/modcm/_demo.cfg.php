<?php
$_demo = array (
  'kid' => 'demo',
  'pid' => 'docs',
  'title' => '样例文档',
  'enable' => '1',
  'etab' => '1',
  'deep' => '2',
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
      'fmsize' => '480',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'color' => 
    array (
      'kid' => 'color',
      'title' => '标题颜色',
      'etab' => '0',
      'type' => 'hidden',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '如:#FF00FF',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'color',
      'fmexstr' => 'title',
      'cfgs' => '',
    ),
    'ndb_repeat' => 
    array (
      'kid' => 'ndb_repeat',
      'title' => '检查重复',
      'etab' => '0',
      'type' => 'repeat',
      'dbtype' => 'nodb',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'repeat',
      'fmexstr' => '',
      'cfgs' => 'demo,title',
    ),
    'detail' => 
    array (
      'kid' => 'detail',
      'title' => '内容',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'mediumtext',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:str:10+',
      'vtip' => '内容10字符以上',
      'vmax' => '0',
      'fmsize' => '550x240',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => 'editor',
      'fmexstr' => 'full,exbar',
      'cfgs' => '',
    ),
    'cfile' => 
    array (
      'kid' => 'cfile',
      'title' => '测试存文件',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'file',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '640',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mpic' => 
    array (
      'kid' => 'mpic',
      'title' => '缩略图',
      'etab' => '0',
      'type' => 'file',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:image',
      'vtip' => 'gif/jpg/jpeg/png格式.',
      'vmax' => '255',
      'fmsize' => '320',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'click' => 
    array (
      'kid' => 'click',
      'title' => '点击次数',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '10',
      'dbdef' => '0',
      'vreg' => 'n+i',
      'vtip' => '如:888',
      'vmax' => '12',
      'fmsize' => '60',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'top' => 
    array (
      'kid' => 'top',
      'title' => '显示顺序',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '10',
      'dbdef' => '888',
      'vreg' => 'n-i',
      'vtip' => '如:888',
      'vmax' => '12',
      'fmsize' => '60',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'dstart' => 
    array (
      'kid' => 'dstart',
      'title' => '开始时间',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '11',
      'dbdef' => '',
      'vreg' => 'nul:str:2-255',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'datetm',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'dend' => 
    array (
      'kid' => 'dend',
      'title' => '结束时间',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'int',
      'dblen' => '11',
      'dbdef' => '',
      'vreg' => 'nul:str:2-255',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '150',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => 'datetm',
      'fmexstr' => 'Y-m-d H:i:s',
      'cfgs' => '',
    ),
    'ndb_extra' => 
    array (
      'kid' => 'ndb_extra',
      'title' => '扩展设置',
      'etab' => '0',
      'type' => 'parts',
      'dbtype' => 'nodb',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'jump' => 
    array (
      'kid' => 'jump',
      'title' => '跳转地址',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:fix:uri',
      'vtip' => 'http://开头',
      'vmax' => '255',
      'fmsize' => '360',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'author' => 
    array (
      'kid' => 'author',
      'title' => '作者',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'seo_key' => 
    array (
      'kid' => 'seo_key',
      'title' => '关键字',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'seo_des' => 
    array (
      'kid' => 'seo_des',
      'title' => '描述',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'seo_tag' => 
    array (
      'kid' => 'seo_tag',
      'title' => '标签',
      'etab' => '1',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'ndb_demo' => 
    array (
      'kid' => 'ndb_demo',
      'title' => '演示字段',
      'etab' => '0',
      'type' => 'parts',
      'dbtype' => 'nodb',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mname' => 
    array (
      'kid' => 'mname',
      'title' => '会员名称',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => 'tester',
      'vreg' => 'str:2-24',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'demo_pass' => 
    array (
      'kid' => 'demo_pass',
      'title' => '密码',
      'etab' => '0',
      'type' => 'passwd',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => 'nul:str:6-24',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mtitle' => 
    array (
      'kid' => 'mtitle',
      'title' => '*联系人',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => 'nul:tit:2-24',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mfrom' => 
    array (
      'kid' => 'mfrom',
      'title' => '选择省份',
      'etab' => '0',
      'type' => 'select',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => 'hn',
      'vreg' => 'str:2-12',
      'vtip' => '至少选两个',
      'vmax' => '12',
      'fmsize' => '',
      'fmline' => '0',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'sc=四川
gd=广东
hn=湖南
gx=广西
jx=江西',
    ),
    'mfron' => 
    array (
      'kid' => 'mfron',
      'title' => '流浪省份',
      'etab' => '0',
      'type' => 'cbox',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => 'gd,gx',
      'vreg' => 'str:2-255',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => 'sc=四川
gd=广东
hn=湖南
gx=广西
jx=江西',
    ),
    'morg' => 
    array (
      'kid' => 'morg',
      'title' => '地区单选',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => 'c0735',
      'vreg' => 'str:2-255',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '60x1',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'winpop',
      'fmexstr' => 'china',
      'cfgs' => 'pid:"cnhn",w:320',
    ),
    'mwork' => 
    array (
      'kid' => 'mwork',
      'title' => '工作地',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'nul:str:2-255',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '240x3',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'winpop',
      'fmexstr' => 'china',
      'cfgs' => '',
    ),
    'tphot' => 
    array (
      'kid' => 'tphot',
      'title' => '信息推荐',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => 'nul:str:2-255',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '180x1',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'winpop',
      'fmexstr' => 'hinfo',
      'cfgs' => '',
    ),
    'tpfields' => 
    array (
      'kid' => 'tpfields',
      'title' => '行业类别',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => 'qita',
      'vreg' => 'str:2-255',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '360x3',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'winpop',
      'fmexstr' => 'ftype',
      'cfgs' => '',
    ),
    'wdreg' => 
    array (
      'kid' => 'wdreg',
      'title' => '世界地区',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '12',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '240x3',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'winpop',
      'fmexstr' => 'world',
      'cfgs' => '',
    ),
    'mche' => 
    array (
      'kid' => 'mche',
      'title' => '汽车品牌',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '240x4',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => 'winpop',
      'fmexstr' => 'auto',
      'cfgs' => '',
    ),
    'mtel' => 
    array (
      'kid' => 'mtel',
      'title' => '电话',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '24',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'map' => 
    array (
      'kid' => 'map',
      'title' => '地图',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '48',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '48',
      'fmsize' => '240',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => 'map',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'miuid' => 
    array (
      'kid' => 'miuid',
      'title' => '聊天号',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '120',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'memail' => 
    array (
      'kid' => 'memail',
      'title' => '邮件地址',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => 'a_b@09-cms.cn',
      'vreg' => 'fix:email',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '180',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'mweb' => 
    array (
      'kid' => 'mweb',
      'title' => '网址',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '255',
      'dbdef' => 'http://192.168.1.168/',
      'vreg' => 'fix:uri',
      'vtip' => '',
      'vmax' => '255',
      'fmsize' => '180',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'maddr' => 
    array (
      'kid' => 'maddr',
      'title' => '地址',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '120',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '120',
      'fmsize' => '150',
      'fmline' => '0',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'company' => 
    array (
      'kid' => 'company',
      'title' => '公司名称',
      'etab' => '0',
      'type' => 'input',
      'dbtype' => 'varchar',
      'dblen' => '96',
      'dbdef' => 'dgnet',
      'vreg' => 'str:2-24',
      'vtip' => '',
      'vmax' => '24',
      'fmsize' => '420',
      'fmline' => '1',
      'fmtitle' => '0',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'ndb_rel' => 
    array (
      'kid' => 'ndb_rel',
      'title' => '相关信息',
      'etab' => '0',
      'type' => 'parts',
      'dbtype' => 'nodb',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => 'cargo.12',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'rel_user' => 
    array (
      'kid' => 'rel_user',
      'title' => '相关用户',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => 'company.12',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => 'pick',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'rel_doc' => 
    array (
      'kid' => 'rel_doc',
      'title' => '相关信息',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => 'cargo.12',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => 'pick',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'rel_para' => 
    array (
      'kid' => 'rel_para',
      'title' => '相关参数',
      'etab' => '0',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => '',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '480x3',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => '',
      'fmexstr' => '',
      'cfgs' => '',
    ),
    'rel_pic' => 
    array (
      'kid' => 'rel_pic',
      'title' => '相关图片',
      'etab' => '1',
      'type' => 'text',
      'dbtype' => 'text',
      'dblen' => '0',
      'dbdef' => '',
      'vreg' => 'nul:',
      'vtip' => '',
      'vmax' => '0',
      'fmsize' => '',
      'fmline' => '1',
      'fmtitle' => '1',
      'fmextra' => 'pics',
      'fmexstr' => '',
      'cfgs' => 'tout=外观图
tin=内饰
telse=配件',
    ),
  ),
  'i' => 
  array (
    'd1016' => 
    array (
      'kid' => 'd1016',
      'pid' => '0',
      'title' => '系统文档',
      'deep' => '1',
      'frame' => '0',
      'char' => 'X',
      'cfgs' => '',
    ),
    'd1012' => 
    array (
      'kid' => 'd1012',
      'pid' => '0',
      'title' => '英语美文',
      'deep' => '1',
      'frame' => '0',
      'char' => 'Y',
      'cfgs' => '',
    ),
    'd2012' => 
    array (
      'kid' => 'd2012',
      'pid' => 'd1012',
      'title' => '英语美文1',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Z',
      'cfgs' => '',
    ),
    'd2014' => 
    array (
      'kid' => 'd2014',
      'pid' => 'd1012',
      'title' => '英语美文2',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Z',
      'cfgs' => '',
    ),
    'd1014' => 
    array (
      'kid' => 'd1014',
      'pid' => '0',
      'title' => '幽默搞笑',
      'deep' => '1',
      'frame' => '0',
      'char' => 'Y',
      'cfgs' => '',
    ),
    'd1018' => 
    array (
      'kid' => 'd1018',
      'pid' => '0',
      'title' => '编辑说明',
      'deep' => '1',
      'frame' => '0',
      'char' => 'B',
      'cfgs' => '',
    ),
    'dtest' => 
    array (
      'kid' => 'dtest',
      'pid' => '0',
      'title' => '测试栏目',
      'deep' => '1',
      'frame' => '0',
      'char' => 'C',
      'cfgs' => '',
    ),
    'dsub1' => 
    array (
      'kid' => 'dsub1',
      'pid' => 'dtest',
      'title' => '测试子类3',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Z',
      'cfgs' => '',
    ),
    'd2018' => 
    array (
      'kid' => 'd2018',
      'pid' => 'dtest',
      'title' => '测试子类4',
      'deep' => '2',
      'frame' => '0',
      'char' => 'Z',
      'cfgs' => '',
    ),
  ),
);
?>