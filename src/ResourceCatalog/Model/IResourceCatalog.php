<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'QIYEJBXX' => 3,
        'HRBXX' => 4,
        'ZFCGDLJGXX' => 5,
        'AJNSRXX' => 6,
        'QYDSXZCFXX' => 7,
        'YSCRJZJJJZGRDXX' => 8,
        'SFJDJGCYRYZGXX' => 9,
        'JGRYXXSSFJ' => 10,
        'HSZYZGZXX' => 11,
        'JGJCDXZJL' => 12,
        'JXSZLJDW' => 13,
        'ESCJDPGJGHZZS' => 14,
        'ZYJNZSXX' => 15,
        'GRRYXXMZJ' => 16,
        'MBFQYML' => 17,
        'SHTTDJXX' => 18,
        'SXBZXJGXX' => 19,
        'SXBZXRMD' => 20,
        'YZTQSBXXHMD' => 21,
        'JGRYXX' => 22,
        'SXQYHMD' => 23,
        'SPYPTSJBJLGR' => 24,
        'SPYPTSJBJLDW' => 25,
        'JXMPCPXX' => 26,
        'ZYZXX' => 27,
        'GRRYXXJYJ' => 28,
        'ZLJCQYXX' => 29,
        'SJQYJSZXRDXX' => 30,
        'XSPJXX' => 31,
        'QYGSZXXX' => 32,
        'QYRYXX' => 33,
        'SHZZNJXX' => 34,
        'YLBXXX' => 35,
        'SYBXXX' => 36,
        'JYJGXINXI' => 37,
        'JSZGXX' => 38,
        'SJYXXS' => 39,
        'JDCWFXX' => 40,
        'SJJXMXX' => 41,
        'TJQYFRGGXYZHPJJG' => 42,
        'QYYCMLXX' => 43,
        'QYHYSJ' => 44,
        'XZJCXX'=>45,
        'XZQZXX'=>46,
        'ZDJGQYMD'=>47,
        //@position_type_48
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['QYHYSJ'],
        ),
        IUserGroup::ID['QFGW'] => array(
            self::TYPE['TEST'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX'],
            self::TYPE['TJQYFRGGXYZHPJJG'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX'],
            self::TYPE['ZDJGQYMD']
        ),
        IUserGroup::ID['QWWXB'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['RMTZX'] => array(
        ),
        IUserGroup::ID['QSWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QZJW'] => array(
            self::TYPE['ZLJCQYXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QWJW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['NW'] => array(
        ),
        IUserGroup::ID['QGZW'] => array(
            self::TYPE['QYRYXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QKJJ'] => array(
            self::TYPE['JXSZLJDW'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QGXJ'] => array(
            self::TYPE['SJQYJSZXRDXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['GAFJ'] => array(
        ),
        IUserGroup::ID['QJCY'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QFY'] => array(
            self::TYPE['SXBZXJGXX'],
            self::TYPE['SXBZXRMD'],
            self::TYPE['XSPJXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QCZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QSHUIWJ'] => array(
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['QYGSZXXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QWLJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QJRJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QSCJGJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['YLBXXX'],
            self::TYPE['SYBXXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QMZJ'] => array(
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['YGJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['YJGLJ'] => array(
        ),
        IUserGroup::ID['QJYJ'] => array(
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QZFB'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['QWXCB'] => array(
            self::TYPE['HRBXX'],
            self::TYPE['ZYZXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJCXX']
        ),
        IUserGroup::ID['XFBCZD'] => array(
        ),
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
