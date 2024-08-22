<?php

function getProductData($productId) {
    // Check if product data exists in cache
    $cacheKey = "product_{$productId}";
    $cachedData = $redis->get($cacheKey);

    if ($cachedData) {
        return json_decode($cachedData, true);  // Return cached data
    }

    // If not in cache, fetch from database
    $productData = $database->fetchProduct($productId);

    // Store the data in cache for future requests
    $redis->setex($cacheKey, 3600, json_encode($productData));  // Cache for 1 hour

    return $productData;
}