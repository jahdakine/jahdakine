return array(
    /*
     * --------------------------------------------------------------------------
     * Application URL
     * --------------------------------------------------------------------------
     *
     * The URL used to access your application without a trailing slash. The URL
     * does not have to be set. If it isn't we'll try our best to guess the URL
     * of your application.
     *
     */
    'url' => 'https://jahdakine.pagodabox.com',


);
public static function base()
    {
        if (isset(static::$base)) return static::$base;

        $base = 'http://localhost';

        // If the application's URL configuration is set, we will just use that
        // instead of trying to guess the URL from the $_SERVER array's host
        // and script variables as this is a more reliable method.
        if (($url = Config::get('application.url')) !== '')
        {
            $base = $url;
        }
        else
        {
            $base = Request::foundation()->getRootUrl();
        }

        return static::$base = $base;
    }