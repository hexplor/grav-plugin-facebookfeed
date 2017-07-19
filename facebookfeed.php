<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class FacebookFeedPlugin extends Plugin
{
  /**
  * @return array
  */
  public static function getSubscribedEvents()
  {
    return [
      'onPluginsInitialized' => ['onPluginsInitialized', 0],
      'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
    ];
  }

  /**
  * Activate plugin if path matches to the configured one.
  */
  public function onPluginsInitialized()
  {

    require_once __DIR__ . '/vendor/autoload.php';

    if ($this->isAdmin()) {
      $this->active = false;
      return;
    }

    $fb = new \Facebook\Facebook([
      'app_id' => $this->config->get('plugins.facebookfeed.app_id'),
      'app_secret' => $this->config->get('plugins.facebookfeed.app_secret'),
      'default_graph_version' => 'v2.9',
      'default_access_token' => $this->config->get('plugins.facebookfeed.app_id')."|".$this->config->get('plugins.facebookfeed.app_secret')
    ]);

    try {
      // Get the \Facebook\GraphNodes\GraphUser object for the current user.
      // If you provided a 'default_access_token', the '{access-token}' is optional.
      $response = $fb->get('/' . $this->config->get('plugins.facebookfeed.page_id') . '/feed?limit=' . $this->config->get('plugins.facebookfeed.limit') .'');
    } catch(\Facebook\Exceptions\FacebookResponseException $e) {
      // When Graph returns an error
      $error = 'Graph returned an error: ' . $e->getMessage();
    } catch(\Facebook\Exceptions\FacebookSDKException $e) {
      // When validation fails or other local issues
      $error = 'Facebook SDK returned an error: ' . $e->getMessage();
    }

    if (!empty($response)) {
      $facebookfeed = $response->getDecodedBody();
      $this->grav['twig']->twig_vars['facebookfeed'] = $facebookfeed['data'];
    } else {
      $this->grav['twig']->twig_vars['facebookfeed_error'] = $error;
    }



  }

  /**
  * Add current directory to twig lookup paths.
  */
  public function onTwigTemplatePaths()
  {
    $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
  }
}
