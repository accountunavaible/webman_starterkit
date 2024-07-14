# 须知
1. 获取项目先创建.env 然后根据里面自己修改

# 提供features
1. 强制路由
2. 404、500处理已做好
3. CORS跨域中间件
4. ok、notok的响应函数

# 所需要的插件 (以防以后有更新)
    "firebase/php-jwt": "^6.10", // jwt使用
    "vlucas/phpdotenv": "^5.6", // env使用
    "illuminate/database": "^9.52", // 数据库
    "workerman/crontab": "^1.0", // 定时任务
    "illuminate/redis": "^9.52", // redis
    "symfony/cache": "^6.0", // 缓存插件
    "workerman/validation": "^3.1", // 验证插件
    "psr/container": "^2.0", // 依赖注入插件
    "php-di/php-di": "^7.0" // 依赖注入插件