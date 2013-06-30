<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // SlashxAdminBundle_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'SlashxAdminBundle_index');
            }

            return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PageController::indexAction',  '_route' => 'SlashxAdminBundle_index',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/album')) {
                // album
                if (rtrim($pathinfo, '/') === '/album') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_album;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'album');
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\AlbumController::indexAction',  '_route' => 'album',);
                }
                not_album:

                // album_create
                if ($pathinfo === '/album/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_album_create;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\AlbumController::createAction',  '_route' => 'album_create',);
                }
                not_album_create:

                // album_new
                if ($pathinfo === '/album/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_album_new;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\AlbumController::newAction',  '_route' => 'album_new',);
                }
                not_album_new:

                // album_show
                if (preg_match('#^/album/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_album_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'album_show')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\AlbumController::showAction',));
                }
                not_album_show:

                // album_edit
                if (preg_match('#^/album/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_album_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'album_edit')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\AlbumController::editAction',));
                }
                not_album_edit:

                // album_update
                if (preg_match('#^/album/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_album_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'album_update')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\AlbumController::updateAction',));
                }
                not_album_update:

                // album_delete
                if (preg_match('#^/album/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_album_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'album_delete')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\AlbumController::deleteAction',));
                }
                not_album_delete:

            }

            if (0 === strpos($pathinfo, '/article')) {
                // article
                if (rtrim($pathinfo, '/') === '/article') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article');
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
                }
                not_article:

                // article_create
                if ($pathinfo === '/article/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_create;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
                }
                not_article_create:

                // article_new
                if ($pathinfo === '/article/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_new;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                }
                not_article_new:

                // article_show
                if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\ArticleController::showAction',));
                }
                not_article_show:

                // article_edit
                if (preg_match('#^/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_article_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\ArticleController::editAction',));
                }
                not_article_edit:

                // article_update
                if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_article_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_update')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\ArticleController::updateAction',));
                }
                not_article_update:

                // article_delete
                if (preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_article_delete:

            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/papillon')) {
                // papillon
                if (rtrim($pathinfo, '/') === '/papillon') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_papillon;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'papillon');
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PapillonController::indexAction',  '_route' => 'papillon',);
                }
                not_papillon:

                // papillon_create
                if ($pathinfo === '/papillon/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_papillon_create;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PapillonController::createAction',  '_route' => 'papillon_create',);
                }
                not_papillon_create:

                // papillon_new
                if ($pathinfo === '/papillon/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_papillon_new;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PapillonController::newAction',  '_route' => 'papillon_new',);
                }
                not_papillon_new:

                // papillon_show
                if (preg_match('#^/papillon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_papillon_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'papillon_show')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PapillonController::showAction',));
                }
                not_papillon_show:

                // papillon_edit
                if (preg_match('#^/papillon/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_papillon_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'papillon_edit')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PapillonController::editAction',));
                }
                not_papillon_edit:

                // papillon_update
                if (preg_match('#^/papillon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_papillon_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'papillon_update')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PapillonController::updateAction',));
                }
                not_papillon_update:

                // papillon_delete
                if (preg_match('#^/papillon/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_papillon_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'papillon_delete')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PapillonController::deleteAction',));
                }
                not_papillon_delete:

            }

            if (0 === strpos($pathinfo, '/photographie')) {
                // photographie
                if (rtrim($pathinfo, '/') === '/photographie') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_photographie;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'photographie');
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PhotographieController::indexAction',  '_route' => 'photographie',);
                }
                not_photographie:

                // photographie_create
                if ($pathinfo === '/photographie/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_photographie_create;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PhotographieController::createAction',  '_route' => 'photographie_create',);
                }
                not_photographie_create:

                // photographie_new
                if ($pathinfo === '/photographie/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_photographie_new;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PhotographieController::newAction',  '_route' => 'photographie_new',);
                }
                not_photographie_new:

                // photographie_show
                if (preg_match('#^/photographie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_photographie_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'photographie_show')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PhotographieController::showAction',));
                }
                not_photographie_show:

                // photographie_edit
                if (preg_match('#^/photographie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_photographie_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'photographie_edit')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PhotographieController::editAction',));
                }
                not_photographie_edit:

                // photographie_update
                if (preg_match('#^/photographie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_photographie_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'photographie_update')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PhotographieController::updateAction',));
                }
                not_photographie_update:

                // photographie_delete
                if (preg_match('#^/photographie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_photographie_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'photographie_delete')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PhotographieController::deleteAction',));
                }
                not_photographie_delete:

            }

            if (0 === strpos($pathinfo, '/publication')) {
                // publication
                if (rtrim($pathinfo, '/') === '/publication') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publication;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'publication');
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PublicationController::indexAction',  '_route' => 'publication',);
                }
                not_publication:

                // publication_create
                if ($pathinfo === '/publication/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_publication_create;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PublicationController::createAction',  '_route' => 'publication_create',);
                }
                not_publication_create:

                // publication_new
                if ($pathinfo === '/publication/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publication_new;
                    }

                    return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PublicationController::newAction',  '_route' => 'publication_new',);
                }
                not_publication_new:

                // publication_show
                if (preg_match('#^/publication/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publication_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_show')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PublicationController::showAction',));
                }
                not_publication_show:

                // publication_edit
                if (preg_match('#^/publication/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_publication_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_edit')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PublicationController::editAction',));
                }
                not_publication_edit:

                // publication_update
                if (preg_match('#^/publication/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_publication_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_update')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PublicationController::updateAction',));
                }
                not_publication_update:

                // publication_delete
                if (preg_match('#^/publication/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_publication_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_delete')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\PublicationController::deleteAction',));
                }
                not_publication_delete:

            }

        }

        if (0 === strpos($pathinfo, '/typage')) {
            // typage
            if (rtrim($pathinfo, '/') === '/typage') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typage;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'typage');
                }

                return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\TypageController::indexAction',  '_route' => 'typage',);
            }
            not_typage:

            // typage_create
            if ($pathinfo === '/typage/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_typage_create;
                }

                return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\TypageController::createAction',  '_route' => 'typage_create',);
            }
            not_typage_create:

            // typage_new
            if ($pathinfo === '/typage/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typage_new;
                }

                return array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\TypageController::newAction',  '_route' => 'typage_new',);
            }
            not_typage_new:

            // typage_show
            if (preg_match('#^/typage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typage_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typage_show')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\TypageController::showAction',));
            }
            not_typage_show:

            // typage_edit
            if (preg_match('#^/typage/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typage_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typage_edit')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\TypageController::editAction',));
            }
            not_typage_edit:

            // typage_update
            if (preg_match('#^/typage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_typage_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typage_update')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\TypageController::updateAction',));
            }
            not_typage_update:

            // typage_delete
            if (preg_match('#^/typage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_typage_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typage_delete')), array (  '_controller' => 'Slashx\\AdminBundle\\Controller\\TypageController::deleteAction',));
            }
            not_typage_delete:

        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // slashx_admin_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'slashx_admin_homepage')), array (  '_controller' => 'SlashxAdminBundle:Default:index',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
