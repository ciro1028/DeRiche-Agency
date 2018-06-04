<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ('/admin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // Archive User
            if (0 === strpos($pathinfo, '/admin/archive') && preg_match('#^/admin/archive/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Archive User')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::archiveUser',));
            }

            // Delete User
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Delete User')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::deleteUser',));
            }

            // Update Secondary Role for User
            if (0 === strpos($pathinfo, '/admin/secondaryrole') && preg_match('#^/admin/secondaryrole/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Update Secondary Role for User')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::secondaryRole',));
            }

            // Update Password for User
            if (0 === strpos($pathinfo, '/admin/password') && preg_match('#^/admin/password/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Update Password for User')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::setPassword',));
            }

        }

        elseif (0 === strpos($pathinfo, '/audit')) {
            // audit
            if ('/audit' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'audit');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuditController::indexAction',  '_route' => 'audit',);
            }

            // Audit By Individual
            if ('/audit/individual' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AuditController::auditIndividual',  '_route' => 'Audit By Individual',);
            }

            // Audit By DateRange
            if ('/audit/dates' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AuditController::auditDates',  '_route' => 'Audit By DateRange',);
            }

            // Audit - Full Backup
            if ('/audit/db-backup' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AuditController::dbBackup',  '_route' => 'Audit - Full Backup',);
            }

        }

        elseif (0 === strpos($pathinfo, '/form')) {
            // forms_create
            if (preg_match('#^/form/(?P<note>[^/]++)/create/(?P<form_type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'forms_create')), array (  '_controller' => 'AppBundle\\Controller\\FormController::renderForm',));
            }

            // Save form to note
            if (preg_match('#^/form/(?P<note>[^/]++)/submit/(?P<form_type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Save form to note')), array (  '_controller' => 'AppBundle\\Controller\\FormController::submitForm',));
            }

            // View Form
            if (0 === strpos($pathinfo, '/form/view') && preg_match('#^/form/view/(?P<form>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'View Form')), array (  '_controller' => 'AppBundle\\Controller\\FormController::viewForm',));
            }

            // Delete Form
            if (0 === strpos($pathinfo, '/form/delete') && preg_match('#^/form/delete(?:/(?P<form>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Delete Form')), array (  'form' => NULL,  '_controller' => 'AppBundle\\Controller\\FormController::deleteForm',));
            }

        }

        // home page
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home page');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\HomeController::indexAction',  '_route' => 'home page',);
        }

        if (0 === strpos($pathinfo, '/individuals')) {
            // individuals
            if ('/individuals' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'individuals');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::indexAction',  '_route' => 'individuals',);
            }

            if (0 === strpos($pathinfo, '/individuals/individual')) {
                // View Individual
                if (preg_match('#^/individuals/individual/(?P<id>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'View Individual');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'View Individual')), array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::viewIndividual',));
                }

                // Add Individual Objective
                if (preg_match('#^/individuals/individual/(?P<id>[^/]++)/objective/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Add Individual Objective');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Add Individual Objective')), array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::addObjective',));
                }

                // Delete Individual Objective
                if (preg_match('#^/individuals/individual/(?P<individual>[^/]++)/objective/(?P<objective>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Delete Individual Objective')), array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::deleteObjective',));
                }

                // Update Individual Objective
                if (preg_match('#^/individuals/individual/(?P<individual>[^/]++)/objective/(?P<objective>[^/]++)/patch$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Update Individual Objective')), array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::updateObjective',));
                }

                // Update Individual
                if (preg_match('#^/individuals/individual/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Update Individual')), array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::updateIndividual',));
                }

            }

            // Create Individual
            if ('/individuals/create' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Create Individual');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::createIndividual',  '_route' => 'Create Individual',);
            }

            // Archive Individual
            if (preg_match('#^/individuals/(?P<id>[^/]++)/archive$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Archive Individual')), array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::archiveIndividual',));
            }

            // UnArchive Individual
            if (preg_match('#^/individuals/(?P<id>[^/]++)/unarchive$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UnArchive Individual')), array (  '_controller' => 'AppBundle\\Controller\\IndividualsController::unArchiveIndividual',));
            }

        }

        elseif (0 === strpos($pathinfo, '/reviewer')) {
            // reviewer
            if ('/reviewer' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reviewer');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReviewerController::indexAction',  '_route' => 'reviewer',);
            }

            if (0 === strpos($pathinfo, '/reviewer/review')) {
                // Reviewer reviews a note.
                if (preg_match('#^/reviewer/review/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reviewer reviews a note.')), array (  '_controller' => 'AppBundle\\Controller\\ReviewerController::review',));
                }

                // Reviewer approves a note.
                if (0 === strpos($pathinfo, '/reviewer/review/approve') && preg_match('#^/reviewer/review/approve/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reviewer approves a note.')), array (  '_controller' => 'AppBundle\\Controller\\ReviewerController::approve',));
                }

                // Reviewer edits and approves a note.
                if (0 === strpos($pathinfo, '/reviewer/review/edit') && preg_match('#^/reviewer/review/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reviewer edits and approves a note.')), array (  '_controller' => 'AppBundle\\Controller\\ReviewerController::edit',));
                }

                // Reviewer comments on a note.
                if (0 === strpos($pathinfo, '/reviewer/review/comment') && preg_match('#^/reviewer/review/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reviewer comments on a note.')), array (  '_controller' => 'AppBundle\\Controller\\ReviewerController::comment',));
                }

            }

            // Reviewer exports a note.
            if (0 === strpos($pathinfo, '/reviewer/export') && preg_match('#^/reviewer/export/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Reviewer exports a note.')), array (  '_controller' => 'AppBundle\\Controller\\ReviewerController::export',));
            }

        }

        // Login Form
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'Login Form',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        if (0 === strpos($pathinfo, '/note')) {
            // note
            if ('/note' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'note');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SubmitterController::indexAction',  '_route' => 'note',);
            }

            // writers reviews a note.
            if ('/note/render' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'writers reviews a note.');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SubmitterController::renderTest',  '_route' => 'writers reviews a note.',);
            }

            // writer reviews a note.
            if (0 === strpos($pathinfo, '/note/review') && preg_match('#^/note/review/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'writer reviews a note.')), array (  '_controller' => 'AppBundle\\Controller\\SubmitterController::pre',));
            }

            // Writer Find Individual
            if ('/note/findindividual' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Writer Find Individual');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\SubmitterController::findIndividual',  '_route' => 'Writer Find Individual',);
            }

            // Writer Create Note
            if (0 === strpos($pathinfo, '/note/create') && preg_match('#^/note/create/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Writer Create Note')), array (  '_controller' => 'AppBundle\\Controller\\SubmitterController::create',));
            }

            // Writer exports a note.
            if (0 === strpos($pathinfo, '/note/export') && preg_match('#^/note/export/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Writer exports a note.')), array (  '_controller' => 'AppBundle\\Controller\\SubmitterController::export',));
            }

            // Writer Update Draft
            if (0 === strpos($pathinfo, '/note/updatedraft') && preg_match('#^/note/updatedraft/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Writer Update Draft')), array (  '_controller' => 'AppBundle\\Controller\\SubmitterController::updateDraft',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
