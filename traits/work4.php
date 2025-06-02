<?php
trait Cacheable {
    private $cache = [];

    public function getCache($key) {
        return $this->cache[$key] ?? null;
    }

    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}

class DataProvider {
    use Cacheable;

    public function fetchData($key) {
        $cachedData = $this->getCache($key);
        if ($cachedData !== null) {
            echo "Данные из кэша: $cachedData<br>";
            return $cachedData;
        }

        $data = "Результат запроса для ключа '$key'";

        $this->setCache($key, $data);
        return $data;
    }
}

class ProductRepository {
    use Cacheable;

    public function getProduct($id) {
        $cacheKey = "product_$id";
        $cachedProduct = $this->getCache($cacheKey);
        if ($cachedProduct !== null) {
            echo "Продукт из кэша: $cachedProduct<br>";
            return $cachedProduct;
        }

        $product = "Продукт #$id (Название: Товар $id)";

        $this->setCache($cacheKey, $product);
        return $product;
    }
}

$dataProvider = new DataProvider();
$dataProvider->fetchData('user_data');
$dataProvider->fetchData('user_data');

$productRepo = new ProductRepository();
$productRepo->getProduct(101);
$productRepo->getProduct(101);