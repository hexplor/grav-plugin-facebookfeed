<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5bb6b7001ff611c85509cdf5640c695
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Facebook\\Authentication\\AccessToken' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Authentication/AccessToken.php',
        'Facebook\\Authentication\\AccessTokenMetadata' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Authentication/AccessTokenMetadata.php',
        'Facebook\\Authentication\\OAuth2Client' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Authentication/OAuth2Client.php',
        'Facebook\\Exceptions\\FacebookAuthenticationException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookAuthenticationException.php',
        'Facebook\\Exceptions\\FacebookAuthorizationException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookAuthorizationException.php',
        'Facebook\\Exceptions\\FacebookClientException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookClientException.php',
        'Facebook\\Exceptions\\FacebookOtherException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookOtherException.php',
        'Facebook\\Exceptions\\FacebookResponseException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookResponseException.php',
        'Facebook\\Exceptions\\FacebookResumableUploadException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookResumableUploadException.php',
        'Facebook\\Exceptions\\FacebookSDKException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookSDKException.php',
        'Facebook\\Exceptions\\FacebookServerException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookServerException.php',
        'Facebook\\Exceptions\\FacebookThrottleException' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Exceptions/FacebookThrottleException.php',
        'Facebook\\Facebook' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Facebook.php',
        'Facebook\\FacebookApp' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookApp.php',
        'Facebook\\FacebookBatchRequest' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookBatchRequest.php',
        'Facebook\\FacebookBatchResponse' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookBatchResponse.php',
        'Facebook\\FacebookClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookClient.php',
        'Facebook\\FacebookRequest' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookRequest.php',
        'Facebook\\FacebookResponse' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FacebookResponse.php',
        'Facebook\\FileUpload\\FacebookFile' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookFile.php',
        'Facebook\\FileUpload\\FacebookResumableUploader' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookResumableUploader.php',
        'Facebook\\FileUpload\\FacebookTransferChunk' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookTransferChunk.php',
        'Facebook\\FileUpload\\FacebookVideo' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/FacebookVideo.php',
        'Facebook\\FileUpload\\Mimetypes' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/FileUpload/Mimetypes.php',
        'Facebook\\GraphNodes\\Birthday' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/Birthday.php',
        'Facebook\\GraphNodes\\Collection' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/Collection.php',
        'Facebook\\GraphNodes\\GraphAchievement' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphAchievement.php',
        'Facebook\\GraphNodes\\GraphAlbum' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphAlbum.php',
        'Facebook\\GraphNodes\\GraphApplication' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphApplication.php',
        'Facebook\\GraphNodes\\GraphCoverPhoto' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphCoverPhoto.php',
        'Facebook\\GraphNodes\\GraphEdge' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphEdge.php',
        'Facebook\\GraphNodes\\GraphEvent' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphEvent.php',
        'Facebook\\GraphNodes\\GraphGroup' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphGroup.php',
        'Facebook\\GraphNodes\\GraphList' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphList.php',
        'Facebook\\GraphNodes\\GraphLocation' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphLocation.php',
        'Facebook\\GraphNodes\\GraphNode' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphNode.php',
        'Facebook\\GraphNodes\\GraphNodeFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphNodeFactory.php',
        'Facebook\\GraphNodes\\GraphObject' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphObject.php',
        'Facebook\\GraphNodes\\GraphObjectFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphObjectFactory.php',
        'Facebook\\GraphNodes\\GraphPage' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphPage.php',
        'Facebook\\GraphNodes\\GraphPicture' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphPicture.php',
        'Facebook\\GraphNodes\\GraphSessionInfo' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphSessionInfo.php',
        'Facebook\\GraphNodes\\GraphUser' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/GraphNodes/GraphUser.php',
        'Facebook\\Helpers\\FacebookCanvasHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookCanvasHelper.php',
        'Facebook\\Helpers\\FacebookJavaScriptHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookJavaScriptHelper.php',
        'Facebook\\Helpers\\FacebookPageTabHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookPageTabHelper.php',
        'Facebook\\Helpers\\FacebookRedirectLoginHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookRedirectLoginHelper.php',
        'Facebook\\Helpers\\FacebookSignedRequestFromInputHelper' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Helpers/FacebookSignedRequestFromInputHelper.php',
        'Facebook\\HttpClients\\FacebookCurl' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookCurl.php',
        'Facebook\\HttpClients\\FacebookCurlHttpClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookCurlHttpClient.php',
        'Facebook\\HttpClients\\FacebookGuzzleHttpClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookGuzzleHttpClient.php',
        'Facebook\\HttpClients\\FacebookHttpClientInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookHttpClientInterface.php',
        'Facebook\\HttpClients\\FacebookStream' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookStream.php',
        'Facebook\\HttpClients\\FacebookStreamHttpClient' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/FacebookStreamHttpClient.php',
        'Facebook\\HttpClients\\HttpClientsFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/HttpClients/HttpClientsFactory.php',
        'Facebook\\Http\\GraphRawResponse' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/GraphRawResponse.php',
        'Facebook\\Http\\RequestBodyInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/RequestBodyInterface.php',
        'Facebook\\Http\\RequestBodyMultipart' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/RequestBodyMultipart.php',
        'Facebook\\Http\\RequestBodyUrlEncoded' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Http/RequestBodyUrlEncoded.php',
        'Facebook\\PersistentData\\FacebookMemoryPersistentDataHandler' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/FacebookMemoryPersistentDataHandler.php',
        'Facebook\\PersistentData\\FacebookSessionPersistentDataHandler' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/FacebookSessionPersistentDataHandler.php',
        'Facebook\\PersistentData\\PersistentDataFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/PersistentDataFactory.php',
        'Facebook\\PersistentData\\PersistentDataInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PersistentData/PersistentDataInterface.php',
        'Facebook\\PseudoRandomString\\McryptPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/McryptPseudoRandomStringGenerator.php',
        'Facebook\\PseudoRandomString\\OpenSslPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/OpenSslPseudoRandomStringGenerator.php',
        'Facebook\\PseudoRandomString\\PseudoRandomStringGeneratorFactory' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/PseudoRandomStringGeneratorFactory.php',
        'Facebook\\PseudoRandomString\\PseudoRandomStringGeneratorInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/PseudoRandomStringGeneratorInterface.php',
        'Facebook\\PseudoRandomString\\PseudoRandomStringGeneratorTrait' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/PseudoRandomStringGeneratorTrait.php',
        'Facebook\\PseudoRandomString\\RandomBytesPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/RandomBytesPseudoRandomStringGenerator.php',
        'Facebook\\PseudoRandomString\\UrandomPseudoRandomStringGenerator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/PseudoRandomString/UrandomPseudoRandomStringGenerator.php',
        'Facebook\\SignedRequest' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/SignedRequest.php',
        'Facebook\\Url\\FacebookUrlDetectionHandler' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Url/FacebookUrlDetectionHandler.php',
        'Facebook\\Url\\FacebookUrlManipulator' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Url/FacebookUrlManipulator.php',
        'Facebook\\Url\\UrlDetectionInterface' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/Url/UrlDetectionInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5bb6b7001ff611c85509cdf5640c695::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5bb6b7001ff611c85509cdf5640c695::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita5bb6b7001ff611c85509cdf5640c695::$classMap;

        }, null, ClassLoader::class);
    }
}