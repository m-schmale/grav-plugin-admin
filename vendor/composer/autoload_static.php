<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef6e9937a63bd796f32542b02941ee0e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Semver\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZendXml\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendxml/library',
            ),
        ),
        'P' => 
        array (
            'PicoFeed' => 
            array (
                0 => __DIR__ . '/..' . '/fguillot/picofeed/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\Semver\\Comparator' => __DIR__ . '/..' . '/composer/semver/src/Comparator.php',
        'Composer\\Semver\\Constraint\\AbstractConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/AbstractConstraint.php',
        'Composer\\Semver\\Constraint\\Constraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/Constraint.php',
        'Composer\\Semver\\Constraint\\ConstraintInterface' => __DIR__ . '/..' . '/composer/semver/src/Constraint/ConstraintInterface.php',
        'Composer\\Semver\\Constraint\\EmptyConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/EmptyConstraint.php',
        'Composer\\Semver\\Constraint\\MultiConstraint' => __DIR__ . '/..' . '/composer/semver/src/Constraint/MultiConstraint.php',
        'Composer\\Semver\\Semver' => __DIR__ . '/..' . '/composer/semver/src/Semver.php',
        'Composer\\Semver\\VersionParser' => __DIR__ . '/..' . '/composer/semver/src/VersionParser.php',
        'PicoFeed\\Base' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Base.php',
        'PicoFeed\\Client\\Client' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Client.php',
        'PicoFeed\\Client\\ClientException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/ClientException.php',
        'PicoFeed\\Client\\Curl' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Curl.php',
        'PicoFeed\\Client\\ForbiddenException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/ForbiddenException.php',
        'PicoFeed\\Client\\HttpHeaders' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/HttpHeaders.php',
        'PicoFeed\\Client\\InvalidCertificateException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/InvalidCertificateException.php',
        'PicoFeed\\Client\\InvalidUrlException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/InvalidUrlException.php',
        'PicoFeed\\Client\\MaxRedirectException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/MaxRedirectException.php',
        'PicoFeed\\Client\\MaxSizeException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/MaxSizeException.php',
        'PicoFeed\\Client\\Stream' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Stream.php',
        'PicoFeed\\Client\\TimeoutException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/TimeoutException.php',
        'PicoFeed\\Client\\UnauthorizedException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/UnauthorizedException.php',
        'PicoFeed\\Client\\Url' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Client/Url.php',
        'PicoFeed\\Config\\Config' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Config/Config.php',
        'PicoFeed\\Encoding\\Encoding' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Encoding/Encoding.php',
        'PicoFeed\\Filter\\Attribute' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Attribute.php',
        'PicoFeed\\Filter\\Filter' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Filter.php',
        'PicoFeed\\Filter\\Html' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Html.php',
        'PicoFeed\\Filter\\Tag' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Filter/Tag.php',
        'PicoFeed\\Generator\\ContentGeneratorInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Generator/ContentGeneratorInterface.php',
        'PicoFeed\\Generator\\FileContentGenerator' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Generator/FileContentGenerator.php',
        'PicoFeed\\Generator\\YoutubeContentGenerator' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Generator/YoutubeContentGenerator.php',
        'PicoFeed\\Logging\\Logger' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Logging/Logger.php',
        'PicoFeed\\Parser\\Atom' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Atom.php',
        'PicoFeed\\Parser\\DateParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/DateParser.php',
        'PicoFeed\\Parser\\Feed' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Feed.php',
        'PicoFeed\\Parser\\Item' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Item.php',
        'PicoFeed\\Parser\\MalformedXmlException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/MalformedXmlException.php',
        'PicoFeed\\Parser\\Parser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Parser.php',
        'PicoFeed\\Parser\\ParserException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/ParserException.php',
        'PicoFeed\\Parser\\ParserInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/ParserInterface.php',
        'PicoFeed\\Parser\\Rss10' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss10.php',
        'PicoFeed\\Parser\\Rss20' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss20.php',
        'PicoFeed\\Parser\\Rss91' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss91.php',
        'PicoFeed\\Parser\\Rss92' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/Rss92.php',
        'PicoFeed\\Parser\\XmlEntityException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/XmlEntityException.php',
        'PicoFeed\\Parser\\XmlParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Parser/XmlParser.php',
        'PicoFeed\\PicoFeedException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/PicoFeedException.php',
        'PicoFeed\\Processor\\ContentFilterProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ContentFilterProcessor.php',
        'PicoFeed\\Processor\\ContentGeneratorProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ContentGeneratorProcessor.php',
        'PicoFeed\\Processor\\ItemPostProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ItemPostProcessor.php',
        'PicoFeed\\Processor\\ItemProcessorInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ItemProcessorInterface.php',
        'PicoFeed\\Processor\\ScraperProcessor' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Processor/ScraperProcessor.php',
        'PicoFeed\\Reader\\Favicon' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/Favicon.php',
        'PicoFeed\\Reader\\Reader' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/Reader.php',
        'PicoFeed\\Reader\\ReaderException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/ReaderException.php',
        'PicoFeed\\Reader\\SubscriptionNotFoundException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/SubscriptionNotFoundException.php',
        'PicoFeed\\Reader\\UnsupportedFeedFormatException' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Reader/UnsupportedFeedFormatException.php',
        'PicoFeed\\Scraper\\CandidateParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/CandidateParser.php',
        'PicoFeed\\Scraper\\ParserInterface' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/ParserInterface.php',
        'PicoFeed\\Scraper\\RuleLoader' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/RuleLoader.php',
        'PicoFeed\\Scraper\\RuleParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/RuleParser.php',
        'PicoFeed\\Scraper\\Scraper' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Scraper/Scraper.php',
        'PicoFeed\\Serialization\\Subscription' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/Subscription.php',
        'PicoFeed\\Serialization\\SubscriptionList' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionList.php',
        'PicoFeed\\Serialization\\SubscriptionListBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionListBuilder.php',
        'PicoFeed\\Serialization\\SubscriptionListParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionListParser.php',
        'PicoFeed\\Serialization\\SubscriptionParser' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Serialization/SubscriptionParser.php',
        'PicoFeed\\Syndication\\AtomFeedBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomFeedBuilder.php',
        'PicoFeed\\Syndication\\AtomHelper' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomHelper.php',
        'PicoFeed\\Syndication\\AtomItemBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/AtomItemBuilder.php',
        'PicoFeed\\Syndication\\FeedBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/FeedBuilder.php',
        'PicoFeed\\Syndication\\ItemBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/ItemBuilder.php',
        'PicoFeed\\Syndication\\Rss20FeedBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20FeedBuilder.php',
        'PicoFeed\\Syndication\\Rss20Helper' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20Helper.php',
        'PicoFeed\\Syndication\\Rss20ItemBuilder' => __DIR__ . '/..' . '/fguillot/picofeed/lib/PicoFeed/Syndication/Rss20ItemBuilder.php',
        'ZendXml\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Exception/ExceptionInterface.php',
        'ZendXml\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Exception/InvalidArgumentException.php',
        'ZendXml\\Exception\\RuntimeException' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Exception/RuntimeException.php',
        'ZendXml\\Security' => __DIR__ . '/..' . '/zendframework/zendxml/library/ZendXml/Security.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef6e9937a63bd796f32542b02941ee0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef6e9937a63bd796f32542b02941ee0e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitef6e9937a63bd796f32542b02941ee0e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitef6e9937a63bd796f32542b02941ee0e::$classMap;

        }, null, ClassLoader::class);
    }
}