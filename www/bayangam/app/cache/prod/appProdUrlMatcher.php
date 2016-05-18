<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        // rj_by_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'rj_by_homepage');
            }

            return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::indexAction',  '_route' => 'rj_by_homepage',);
        }

        // rj_by_archives
        if (0 === strpos($pathinfo, '/archives') && preg_match('#^/archives/(?P<annee>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rj_by_archives')), array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::archivesAction',));
        }

        // rj_by_cantact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::contactAction',  '_route' => 'rj_by_cantact',);
        }

        if (0 === strpos($pathinfo, '/organisation')) {
            // rj_by_action
            if ($pathinfo === '/organisation/action') {
                return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::nosactionsAction',  '_route' => 'rj_by_action',);
            }

            // rj_by_but
            if ($pathinfo === '/organisation/but') {
                return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::butAction',  '_route' => 'rj_by_but',);
            }

            // rj_by_equipe
            if ($pathinfo === '/organisation/equipe') {
                return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::equipeAction',  '_route' => 'rj_by_equipe',);
            }

        }

        // rj_by_galerie
        if ($pathinfo === '/resources/galerie') {
            return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::galerieAction',  '_route' => 'rj_by_galerie',);
        }

        if (0 === strpos($pathinfo, '/soutien')) {
            // rj_by_cours
            if ($pathinfo === '/soutien/cours') {
                return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::coursAction',  '_route' => 'rj_by_cours',);
            }

            // rj_by_blog
            if ($pathinfo === '/soutien/blog') {
                return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::blogAction',  '_route' => 'rj_by_blog',);
            }

            // rj_by_aide
            if ($pathinfo === '/soutien/aide') {
                return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::aideAction',  '_route' => 'rj_by_aide',);
            }

            // rj_by_soutien
            if ($pathinfo === '/soutien/soutien') {
                return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::soutienAction',  '_route' => 'rj_by_soutien',);
            }

            if (0 === strpos($pathinfo, '/soutien/blog')) {
                // rj_by_blog1
                if ($pathinfo === '/soutien/blog1') {
                    return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::blog1Action',  '_route' => 'rj_by_blog1',);
                }

                // rj_by_blog2
                if ($pathinfo === '/soutien/blog2') {
                    return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::blog2Action',  '_route' => 'rj_by_blog2',);
                }

                // rj_by_blog3
                if ($pathinfo === '/soutien/blog3') {
                    return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::blog3Action',  '_route' => 'rj_by_blog3',);
                }

                // rj_by_blog4
                if ($pathinfo === '/soutien/blog4') {
                    return array (  '_controller' => 'wp\\AssociationBundle\\Controller\\HomeController::blog4Action',  '_route' => 'rj_by_blog4',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/wp/association/a')) {
                if (0 === strpos($pathinfo, '/admin/wp/association/articles')) {
                    // admin_wp_association_articles_list
                    if ($pathinfo === '/admin/wp/association/articles/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.articles',  '_sonata_name' => 'admin_wp_association_articles_list',  '_route' => 'admin_wp_association_articles_list',);
                    }

                    // admin_wp_association_articles_create
                    if ($pathinfo === '/admin/wp/association/articles/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.articles',  '_sonata_name' => 'admin_wp_association_articles_create',  '_route' => 'admin_wp_association_articles_create',);
                    }

                    // admin_wp_association_articles_batch
                    if ($pathinfo === '/admin/wp/association/articles/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.articles',  '_sonata_name' => 'admin_wp_association_articles_batch',  '_route' => 'admin_wp_association_articles_batch',);
                    }

                    // admin_wp_association_articles_edit
                    if (preg_match('#^/admin/wp/association/articles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wp_association_articles_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.articles',  '_sonata_name' => 'admin_wp_association_articles_edit',));
                    }

                    // admin_wp_association_articles_delete
                    if (preg_match('#^/admin/wp/association/articles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wp_association_articles_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.articles',  '_sonata_name' => 'admin_wp_association_articles_delete',));
                    }

                    // admin_wp_association_articles_show
                    if (preg_match('#^/admin/wp/association/articles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wp_association_articles_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.articles',  '_sonata_name' => 'admin_wp_association_articles_show',));
                    }

                    // admin_wp_association_articles_export
                    if ($pathinfo === '/admin/wp/association/articles/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.articles',  '_sonata_name' => 'admin_wp_association_articles_export',  '_route' => 'admin_wp_association_articles_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/wp/association/auteur')) {
                    // admin_wp_association_auteur_list
                    if ($pathinfo === '/admin/wp/association/auteur/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.auteur',  '_sonata_name' => 'admin_wp_association_auteur_list',  '_route' => 'admin_wp_association_auteur_list',);
                    }

                    // admin_wp_association_auteur_create
                    if ($pathinfo === '/admin/wp/association/auteur/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.auteur',  '_sonata_name' => 'admin_wp_association_auteur_create',  '_route' => 'admin_wp_association_auteur_create',);
                    }

                    // admin_wp_association_auteur_batch
                    if ($pathinfo === '/admin/wp/association/auteur/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.auteur',  '_sonata_name' => 'admin_wp_association_auteur_batch',  '_route' => 'admin_wp_association_auteur_batch',);
                    }

                    // admin_wp_association_auteur_edit
                    if (preg_match('#^/admin/wp/association/auteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wp_association_auteur_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.auteur',  '_sonata_name' => 'admin_wp_association_auteur_edit',));
                    }

                    // admin_wp_association_auteur_delete
                    if (preg_match('#^/admin/wp/association/auteur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wp_association_auteur_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.auteur',  '_sonata_name' => 'admin_wp_association_auteur_delete',));
                    }

                    // admin_wp_association_auteur_show
                    if (preg_match('#^/admin/wp/association/auteur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_wp_association_auteur_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.auteur',  '_sonata_name' => 'admin_wp_association_auteur_show',));
                    }

                    // admin_wp_association_auteur_export
                    if ($pathinfo === '/admin/wp/association/auteur/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.auteur',  '_sonata_name' => 'admin_wp_association_auteur_export',  '_route' => 'admin_wp_association_auteur_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
