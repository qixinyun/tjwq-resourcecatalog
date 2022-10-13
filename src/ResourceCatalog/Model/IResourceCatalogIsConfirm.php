<?php
namespace ResourceCatalog\Model;

interface IResourceCatalogIsConfirm
{
    const TYPE_RESOURECATALOG_CONFIRM = array(
        IResourceCatalog::TYPE['NULL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XBXZCF'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XBXZXK'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QIYEJBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HRBXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZFCGDLJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['AJNSRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYDSXZCFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YSCRJZJJJZGRDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SFJDJGCYRYZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXXSSFJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['HSZYZGZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGJCDXZJL'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JXSZLJDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ESCJDPGJGHZZS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZYJNZSXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXMZJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['MBFQYML'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SHTTDJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SXBZXJGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SXBZXRMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YZTQSBXXHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JGRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SXQYHMD'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SPYPTSJBJLGR'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SPYPTSJBJLDW'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JXMPCPXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZYZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['GRRYXXJYJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZLJCQYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SJQYJSZXRDXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['XSPJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYGSZXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYRYXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SHZZNJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['YLBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SYBXXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JYJGXINXI'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JSZGXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SJYXXS'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['JDCWFXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['SJJXMXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TJQYFRGGXYZHPJJG'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYYCMLXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['QYHYSJ'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['TEST'] => ISearchableResourceCatalogData::TYPE_CONFIRM['NOT_CONFIRM'],
        IResourceCatalog::TYPE['ZDJGQYMD'] =>  ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XZCJXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XZJDJCXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XZJLXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XZQRXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['XZQZXX'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['T_NP_BLACKLIST'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        IResourceCatalog::TYPE['T_NP_REDLIST'] => ISearchableResourceCatalogData::TYPE_CONFIRM['IS_CONFIRM'],
        //@position
    );
}
