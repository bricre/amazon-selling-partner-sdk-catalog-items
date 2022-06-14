<?php

namespace Amz\CatalogItems;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'searchContentDocuments' => [
            '200.' => 'Amz\\AplusContent\\Model\\SearchContentDocumentsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'createContentDocument' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'getContentDocument' => [
            '200.' => 'Amz\\AplusContent\\Model\\GetContentDocumentResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'updateContentDocument' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'listContentDocumentAsinRelations' => [
            '200.' => 'Amz\\AplusContent\\Model\\ListContentDocumentAsinRelationsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'postContentDocumentAsinRelations' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentAsinRelationsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'validateContentDocumentAsinRelations' => [
            '200.' => 'Amz\\AplusContent\\Model\\ValidateContentDocumentAsinRelationsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'searchContentPublishRecords' => [
            '200.' => 'Amz\\AplusContent\\Model\\SearchContentPublishRecordsResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'postContentDocumentApprovalSubmission' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentApprovalSubmissionResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'postContentDocumentSuspendSubmission' => [
            '200.' => 'Amz\\AplusContent\\Model\\PostContentDocumentSuspendSubmissionResponse',
            '400.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '401.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '403.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '404.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '410.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '429.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '500.' => 'Amz\\AplusContent\\Model\\ErrorList',
            '503.' => 'Amz\\AplusContent\\Model\\ErrorList',
        ],
        'getAuthorizationCode' => [
            '200.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '400.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '403.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '404.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '413.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '415.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '429.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '500.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
            '503.' => 'Amz\\Authorization\\Model\\GetAuthorizationCodeResponse',
        ],
        'listCatalogItems' => [
            '200.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
            '400.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
            '401.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
            '403.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
            '404.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
            '429.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
            '500.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
            '503.' => 'Amz\\CatalogItems\\Model\\ListCatalogItemsResponse',
        ],
        'getCatalogItem' => [
            '200.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
            '400.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
            '401.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
            '403.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
            '404.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
            '429.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
            '500.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
            '503.' => 'Amz\\CatalogItems\\Model\\GetCatalogItemResponse',
        ],
        'listCatalogCategories' => [
            '200.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
            '400.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
            '401.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
            '403.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
            '404.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
            '429.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
            '500.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
            '503.' => 'Amz\\CatalogItems\\Model\\ListCatalogCategoriesResponse',
        ],
    ];
}
