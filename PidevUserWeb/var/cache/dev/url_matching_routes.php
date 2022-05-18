<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/a/f' => [[['_route' => 'a_f_index', '_controller' => 'App\\Controller\\AFController::index'], null, ['GET' => 0], null, true, false, null]],
        '/a/f/new' => [[['_route' => 'a_f_new', '_controller' => 'App\\Controller\\AFController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::afficher'], null, null, null, false, false, null]],
        '/ajoutuser' => [[['_route' => 'ajoutuser', '_controller' => 'App\\Controller\\AdminController::ajout'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/showArticleFront' => [[['_route' => 'showArticleFront', '_controller' => 'App\\Controller\\ArticleController::showFront'], null, ['GET' => 0], null, false, false, null]],
        '/article/new' => [[['_route' => 'article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/avis' => [[['_route' => 'avis_index', '_controller' => 'App\\Controller\\AvisController::index'], null, ['GET' => 0], null, true, false, null]],
        '/avis/new' => [[['_route' => 'avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blogueur' => [[['_route' => 'blogueur_index', '_controller' => 'App\\Controller\\BlogueurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/blogueur/new' => [[['_route' => 'blogueur_new', '_controller' => 'App\\Controller\\BlogueurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, false, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chambre' => [[['_route' => 'chambre', '_controller' => 'App\\Controller\\ChambreController::index'], null, null, null, false, false, null]],
        '/ajouterchambre' => [[['_route' => 'ajouterchambre', '_controller' => 'App\\Controller\\ChambreController::ajouterchambre'], null, null, null, false, false, null]],
        '/afficherchambre' => [[['_route' => 'afficherchambre', '_controller' => 'App\\Controller\\ChambreController::Affiche'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/client/profil/modifier' => [[['_route' => 'client_profil_modifier', '_controller' => 'App\\Controller\\ClientController::editProfile'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/destination' => [[['_route' => 'destination', '_controller' => 'App\\Controller\\DestinationController::index'], null, null, null, false, false, null]],
        '/addDest' => [[['_route' => 'addDest', '_controller' => 'App\\Controller\\DestinationController::addDest'], null, null, null, false, false, null]],
        '/liste1' => [[['_route' => 'liste1', '_controller' => 'App\\Controller\\DestinationController::liste1'], null, null, null, false, false, null]],
        '/event/display' => [[['_route' => 'event_display', '_controller' => 'App\\Controller\\EventController::display'], null, null, null, false, false, null]],
        '/AjouterEvent' => [[['_route' => 'AjouterEvent', '_controller' => 'App\\Controller\\EventController::AjouterEvent'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/event/affback' => [[['_route' => 'affback', '_controller' => 'App\\Controller\\EventController::affback'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rechercheevent' => [[['_route' => 'rechercheevent', '_controller' => 'App\\Controller\\EventController::recherche'], null, null, null, false, false, null]],
        '/ajouterhotel' => [[['_route' => 'ajouterhotel', '_controller' => 'App\\Controller\\HotelController::addHotel'], null, null, null, false, false, null]],
        '/afficherhotel' => [[['_route' => 'afficherhotel', '_controller' => 'App\\Controller\\HotelController::Affiche'], null, null, null, false, false, null]],
        '/afficherhotelClient' => [[['_route' => 'afficherhotelClient', '_controller' => 'App\\Controller\\HotelController::afficherhotelClient'], null, null, null, false, false, null]],
        '/afficherhotelClientmobile' => [[['_route' => 'afficherhotelClientmobile', '_controller' => 'App\\Controller\\HotelController::afficherhotelClientmobile'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\HotelController::statAction'], null, null, null, false, false, null]],
        '/rating' => [[['_route' => 'rating', '_controller' => 'App\\Controller\\HotelController::rating'], null, null, null, false, false, null]],
        '/like' => [[['_route' => 'app_like_like', '_controller' => 'App\\Controller\\LikeController::like'], null, null, null, false, false, null]],
        '/mobile' => [[['_route' => 'app_mobile', '_controller' => 'App\\Controller\\MobileController::index'], null, null, null, false, false, null]],
        '/signupMobile' => [[['_route' => 'signupMobile', '_controller' => 'App\\Controller\\MobileController::signupMobile'], null, null, null, false, false, null]],
        '/signinMobile' => [[['_route' => 'signinMobile', '_controller' => 'App\\Controller\\MobileController::signinAction'], null, null, null, false, false, null]],
        '/editUserMobile' => [[['_route' => 'editUserMobile', '_controller' => 'App\\Controller\\MobileController::editUserMobile'], null, null, null, false, false, null]],
        '/ShowAllUsers' => [[['_route' => 'ShowAllUsers', '_controller' => 'App\\Controller\\MobileController::ShowAllUsers'], null, null, null, false, false, null]],
        '/passwordMobile' => [[['_route' => 'passwordMobile', '_controller' => 'App\\Controller\\MobileController::getPasswordbyEmail'], null, null, null, false, false, null]],
        '/ShowAllAvis' => [[['_route' => 'ShowAllAvis', '_controller' => 'App\\Controller\\MobileController::ShowAllAvis'], null, null, null, false, false, null]],
        '/AddAvis' => [[['_route' => 'AddAvis', '_controller' => 'App\\Controller\\MobileController::AddAvis'], null, null, null, false, false, null]],
        '/UpdateAvis' => [[['_route' => 'UpdateAvis', '_controller' => 'App\\Controller\\MobileController::UpdateAvis'], null, null, null, false, false, null]],
        '/DeleteAvis' => [[['_route' => 'DeleteAvis', '_controller' => 'App\\Controller\\MobileController::DeleteAvis'], null, null, null, false, false, null]],
        '/ShowAllComments' => [[['_route' => 'ShowAllComments', '_controller' => 'App\\Controller\\MobileController::ShowAllComments'], null, null, null, false, false, null]],
        '/ShowAllCommentsbyid' => [[['_route' => 'ShowAllCommentsbyid', '_controller' => 'App\\Controller\\MobileController::ShowAllCommentsbyid'], null, null, null, false, false, null]],
        '/AddComment' => [[['_route' => 'AddComment', '_controller' => 'App\\Controller\\MobileController::AddComment'], null, null, null, false, false, null]],
        '/UpdateComment' => [[['_route' => 'UpdateComment', '_controller' => 'App\\Controller\\MobileController::UpdateComment'], null, null, null, false, false, null]],
        '/DeleteComment' => [[['_route' => 'DeleteComment', '_controller' => 'App\\Controller\\MobileController::DeleteComment'], null, null, null, false, false, null]],
        '/tridescMobilee' => [[['_route' => 'tridescMobilee', '_controller' => 'App\\Controller\\MobileController::tridescMobilee'], null, null, null, false, false, null]],
        '/ShowAllReclamation' => [[['_route' => 'ShowAllReclamation', '_controller' => 'App\\Controller\\MobileController::ShowAllReclamation'], null, null, null, false, false, null]],
        '/AddReclamation' => [[['_route' => 'AddReclamation', '_controller' => 'App\\Controller\\MobileController::AddReclamation'], null, null, null, false, false, null]],
        '/UpdateReclamation' => [[['_route' => 'UpdateReclamation', '_controller' => 'App\\Controller\\MobileController::UpdateReclamation'], null, null, null, false, false, null]],
        '/DeleteReclamation' => [[['_route' => 'DeleteReclamation', '_controller' => 'App\\Controller\\MobileController::DeleteReclamation'], null, null, null, false, false, null]],
        '/displayreclamationMobile' => [[['_route' => 'displayreclamationMobile', '_controller' => 'App\\Controller\\MobileController::displayreclamationMobile'], null, null, null, false, false, null]],
        '/ShowAllReponse' => [[['_route' => 'ShowAllReponse', '_controller' => 'App\\Controller\\MobileController::ShowAllReponse'], null, null, null, false, false, null]],
        '/AddReponse' => [[['_route' => 'AddReponse', '_controller' => 'App\\Controller\\MobileController::AddReponse'], null, null, null, false, false, null]],
        '/UpdateReponse' => [[['_route' => 'UpdateReponse', '_controller' => 'App\\Controller\\MobileController::UpdateReponse'], null, null, null, false, false, null]],
        '/DeleteReponse' => [[['_route' => 'DeleteReponse', '_controller' => 'App\\Controller\\MobileController::DeleteReponse'], null, null, null, false, false, null]],
        '/tristatutMobilee' => [[['_route' => 'tristatutMobilee', '_controller' => 'App\\Controller\\MobileController::tristatusMobilee'], null, null, null, false, false, null]],
        '/mobile/chambre' => [[['_route' => 'app_mobile_chambremobile_index', '_controller' => 'App\\Controller\\Mobile\\ChambreMobileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mobile/chambre/show' => [[['_route' => 'app_mobile_chambremobile_show', '_controller' => 'App\\Controller\\Mobile\\ChambreMobileController::show'], null, null, null, false, false, null]],
        '/mobile/chambre/add' => [[['_route' => 'app_mobile_chambremobile_add', '_controller' => 'App\\Controller\\Mobile\\ChambreMobileController::add'], null, null, null, false, false, null]],
        '/mobile/chambre/edit' => [[['_route' => 'app_mobile_chambremobile_edit', '_controller' => 'App\\Controller\\Mobile\\ChambreMobileController::edit'], null, null, null, false, false, null]],
        '/mobile/chambre/deleteAll' => [[['_route' => 'app_mobile_chambremobile_deleteall', '_controller' => 'App\\Controller\\Mobile\\ChambreMobileController::deleteAll'], null, ['POST' => 0], null, false, false, null]],
        '/mobile/hotel' => [[['_route' => 'app_mobile_hotelmobile_index', '_controller' => 'App\\Controller\\Mobile\\HotelMobileController::index'], null, ['GET' => 0], null, false, false, null]],
        '/mobile/hotel/show' => [[['_route' => 'app_mobile_hotelmobile_show', '_controller' => 'App\\Controller\\Mobile\\HotelMobileController::show'], null, ['POST' => 0], null, false, false, null]],
        '/mobile/hotel/add' => [[['_route' => 'app_mobile_hotelmobile_add', '_controller' => 'App\\Controller\\Mobile\\HotelMobileController::add'], null, null, null, false, false, null]],
        '/mobile/hotel/edit' => [[['_route' => 'app_mobile_hotelmobile_edit', '_controller' => 'App\\Controller\\Mobile\\HotelMobileController::edit'], null, null, null, false, false, null]],
        '/mobile/hotel/deleteAll' => [[['_route' => 'app_mobile_hotelmobile_deleteall', '_controller' => 'App\\Controller\\Mobile\\HotelMobileController::deleteAll'], null, ['POST' => 0], null, false, false, null]],
        '/opinion' => [[['_route' => 'opinion_index', '_controller' => 'App\\Controller\\OpinionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/opinion/new' => [[['_route' => 'opinion_new', '_controller' => 'App\\Controller\\OpinionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion' => [[['_route' => 'promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/display' => [[['_route' => 'promotion_display', '_controller' => 'App\\Controller\\PromotionController::display'], null, ['GET' => 0], null, false, false, null]],
        '/promotion/new' => [[['_route' => 'promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclammation/afficherreclamations' => [[['_route' => 'reclammation_index', '_controller' => 'App\\Controller\\ReclammationController::afficherReclamation'], null, ['GET' => 0], null, false, false, null]],
        '/reclammation/client' => [[['_route' => 'reclammation_indexClient', '_controller' => 'App\\Controller\\ReclammationController::indexClient'], null, ['GET' => 0], null, false, false, null]],
        '/reclammation/new' => [[['_route' => 'reclammation_new', '_controller' => 'App\\Controller\\ReclammationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclammation/client/recherche' => [[['_route' => 'recherche_reclamation', '_controller' => 'App\\Controller\\ReclammationController::rechercheReclamation'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reserver' => [[['_route' => 'reserver', '_controller' => 'App\\Controller\\ReservationController::reserver'], null, null, null, false, false, null]],
        '/listes' => [[['_route' => 'listes', '_controller' => 'App\\Controller\\ReservationController::listes'], null, null, null, false, false, null]],
        '/listres' => [[['_route' => 'listres', '_controller' => 'App\\Controller\\ReserveVolController::afficheres'], null, null, null, false, false, null]],
        '/newreservation' => [[['_route' => 'newreservation', '_controller' => 'App\\Controller\\ReserveVolController::newreservation'], null, null, null, false, false, null]],
        '/pdf2' => [[['_route' => 'pdf2', '_controller' => 'App\\Controller\\ReserveVolController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::oubliPass'], null, null, null, false, false, null]],
        '/signalement' => [[['_route' => 'signalement_index', '_controller' => 'App\\Controller\\SignalementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/bloque' => [[['_route' => 'bloq', '_controller' => 'App\\Controller\\UserController::afficher'], null, null, null, false, false, null]],
        '/Vol' => [[['_route' => 'Vol', '_controller' => 'App\\Controller\\VolController::index'], null, null, null, false, false, null]],
        '/addv' => [[['_route' => 'addv', '_controller' => 'App\\Controller\\VolController::add'], null, null, null, false, false, null]],
        '/list' => [[['_route' => 'list', '_controller' => 'App\\Controller\\VolController::list'], null, null, null, false, false, null]],
        '/lis' => [[['_route' => 'lis', '_controller' => 'App\\Controller\\VolController::lis'], null, null, null, false, false, null]],
        '/calenderiervol' => [[['_route' => 'calenderiervol', '_controller' => 'App\\Controller\\VolController::calenderiervols'], null, null, null, false, false, null]],
        '/vol/recherche' => [[['_route' => 'recherche_vol', '_controller' => 'App\\Controller\\VolController::rechercheVol'], null, null, null, false, false, null]],
        '/WishList' => [[['_route' => 'WishList', '_controller' => 'App\\Controller\\WishlistController::index'], null, null, null, false, false, null]],
        '/delete' => [[['_route' => 'delete_all', '_controller' => 'App\\Controller\\WishlistController::deleteAll'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|/f/([^/]++)(?'
                        .'|(*:188)'
                        .'|/edit(*:201)'
                        .'|(*:209)'
                    .')'
                    .'|rticle/([^/]++)(?'
                        .'|(*:236)'
                        .'|/edit(*:249)'
                        .'|(*:257)'
                    .')'
                    .'|vis/(?'
                        .'|newcomment/([^/]++)(*:292)'
                        .'|([^/]++)(?'
                            .'|(*:311)'
                            .'|/edit(*:324)'
                            .'|(*:332)'
                        .')'
                    .')'
                .')'
                .'|/modifuser/([^/]++)(*:362)'
                .'|/supp(?'
                    .'|user/([^/]++)(*:391)'
                    .'|rimerchambre/([^/]++)(*:420)'
                .')'
                .'|/user/([^/]++)/(?'
                    .'|desactiver(*:457)'
                    .'|activer(*:472)'
                .')'
                .'|/blogueur/([^/]++)(?'
                    .'|(*:502)'
                    .'|/(?'
                        .'|edit(*:518)'
                        .'|delete(*:532)'
                        .'|block(*:545)'
                    .')'
                .')'
                .'|/calendar/([^/]++)(?'
                    .'|(*:576)'
                    .'|/edit(*:589)'
                    .'|(*:597)'
                .')'
                .'|/([^/]++)/modifierchambre(*:631)'
                .'|/commentaire/(?'
                    .'|([^/]++)(?'
                        .'|(*:666)'
                        .'|/edit(*:679)'
                    .')'
                    .'|delete/([^/]++)(*:703)'
                .')'
                .'|/deletec1/([^/]++)(*:730)'
                .'|/update1/([^/]++)(*:755)'
                .'|/event/([^/]++)(?'
                    .'|(*:781)'
                    .'|/edit(*:794)'
                    .'|(*:802)'
                .')'
                .'|/supprimerhotel/([^/]++)(*:835)'
                .'|/([^/]++)/modifierhotel(*:866)'
                .'|/hotel/([^/]++)(*:889)'
                .'|/p(?'
                    .'|df/([^/]++)(*:913)'
                    .'|romotion/(?'
                        .'|([^/]++)(?'
                            .'|(*:944)'
                            .'|/edit(*:957)'
                            .'|(*:965)'
                        .')'
                        .'|AjouterEvent(*:986)'
                        .'|deleteEvent/([^/]++)(*:1014)'
                        .'|updateEvent(*:1034)'
                    .')'
                .')'
                .'|/mobile/(?'
                    .'|chambre/(?'
                        .'|delete/([^/]++)(*:1082)'
                        .'|image/([^/]++)(*:1105)'
                    .')'
                    .'|hotel/(?'
                        .'|delete/([^/]++)(*:1139)'
                        .'|image/([^/]++)(*:1162)'
                    .')'
                .')'
                .'|/opinion/([^/]++)(?'
                    .'|(*:1193)'
                    .'|/(?'
                        .'|edit(*:1210)'
                        .'|delete(*:1225)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clammation/([^/]++)(?'
                        .'|(*:1264)'
                        .'|/edit(*:1278)'
                        .'|(*:1287)'
                    .')'
                    .'|ponse/(?'
                        .'|([^/]++)(?'
                            .'|/new(*:1321)'
                            .'|(*:1330)'
                        .')'
                        .'|client/([^/]++)(*:1355)'
                        .'|([^/]++)(?'
                            .'|/edit(*:1380)'
                            .'|(*:1389)'
                        .')'
                    .')'
                    .'|set_pass/([^/]++)(*:1417)'
                    .'|move/([^/]++)(*:1439)'
                .')'
                .'|/delete(?'
                    .'|reservation/([^/]++)(*:1479)'
                    .'|c/([^/]++)(*:1498)'
                .')'
                .'|/update(?'
                    .'|reservation/([^/]++)(*:1538)'
                    .'|/([^/]++)(*:1556)'
                .')'
                .'|/signalement/(?'
                    .'|new/([^/]++)(*:1594)'
                    .'|([^/]++)(?'
                        .'|(*:1614)'
                        .'|/(?'
                            .'|edit(*:1631)'
                            .'|delete(*:1646)'
                        .')'
                    .')'
                .')'
                .'|/add/([^/]++)(*:1671)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        188 => [[['_route' => 'a_f_show', '_controller' => 'App\\Controller\\AFController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'a_f_edit', '_controller' => 'App\\Controller\\AFController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'a_f_delete', '_controller' => 'App\\Controller\\AFController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        236 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        292 => [[['_route' => 'avis_comment', '_controller' => 'App\\Controller\\AvisController::newcommentaire'], ['idavis'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        311 => [[['_route' => 'avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        324 => [[['_route' => 'avis_edit', '_controller' => 'App\\Controller\\AvisController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        332 => [[['_route' => 'avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        362 => [[['_route' => 'modifuser', '_controller' => 'App\\Controller\\AdminController::modifier'], ['iduser'], null, null, false, true, null]],
        391 => [[['_route' => 'suppuser', '_controller' => 'App\\Controller\\AdminController::supprimer'], ['iduser'], null, null, false, true, null]],
        420 => [[['_route' => 'supprimerchambre', '_controller' => 'App\\Controller\\ChambreController::supprimerchambre'], ['id'], null, null, false, true, null]],
        457 => [[['_route' => 'desactiver-user', '_controller' => 'App\\Controller\\AdminController::desactiverUser'], ['id'], null, null, false, false, null]],
        472 => [[['_route' => 'activer-user', '_controller' => 'App\\Controller\\AdminController::activerUser'], ['id'], null, null, false, false, null]],
        502 => [[['_route' => 'blogueur_show', '_controller' => 'App\\Controller\\BlogueurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'blogueur_edit', '_controller' => 'App\\Controller\\BlogueurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        532 => [[['_route' => 'blogueur_delete', '_controller' => 'App\\Controller\\BlogueurController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        545 => [[['_route' => 'blogueur_block', '_controller' => 'App\\Controller\\BlogueurController::block'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        576 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        589 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        597 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        631 => [[['_route' => 'modifierchambre', '_controller' => 'App\\Controller\\ChambreController::editChambre'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        666 => [[['_route' => 'commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        679 => [[['_route' => 'commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        703 => [[['_route' => 'commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], null, null, false, true, null]],
        730 => [[['_route' => 'delete1', '_controller' => 'App\\Controller\\DestinationController::delete'], ['id'], null, null, false, true, null]],
        755 => [[['_route' => 'update1', '_controller' => 'App\\Controller\\DestinationController::update'], ['id'], null, null, false, true, null]],
        781 => [[['_route' => 'event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        794 => [[['_route' => 'event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        802 => [[['_route' => 'event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        835 => [[['_route' => 'supprimerhotel', '_controller' => 'App\\Controller\\HotelController::supprimerHotel'], ['id'], null, null, false, true, null]],
        866 => [[['_route' => 'modifierhotel', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        889 => [[['_route' => 'get_hotel_info', '_controller' => 'App\\Controller\\HotelController::getById'], ['id'], null, null, false, true, null]],
        913 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\HotelController::pdf'], ['id'], ['GET' => 0], null, false, true, null]],
        944 => [[['_route' => 'promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        957 => [[['_route' => 'promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        965 => [[['_route' => 'promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        986 => [[['_route' => 'AjouterEventt', '_controller' => 'App\\Controller\\PromotionController::AjouterPromotion'], [], null, null, false, false, null]],
        1014 => [[['_route' => 'deleteEvent', '_controller' => 'App\\Controller\\PromotionController::deletePromotion'], ['id'], null, null, false, true, null]],
        1034 => [[['_route' => 'updateEvent', '_controller' => 'App\\Controller\\PromotionController::updateProduit'], [], null, null, false, false, null]],
        1082 => [[['_route' => 'app_mobile_chambremobile_delete', '_controller' => 'App\\Controller\\Mobile\\ChambreMobileController::delete'], ['id'], null, null, false, true, null]],
        1105 => [[['_route' => 'app_mobile_chambremobile_getpicture', '_controller' => 'App\\Controller\\Mobile\\ChambreMobileController::getPicture'], ['image'], ['GET' => 0], null, false, true, null]],
        1139 => [[['_route' => 'app_mobile_hotelmobile_delete', '_controller' => 'App\\Controller\\Mobile\\HotelMobileController::delete'], ['id'], null, null, false, true, null]],
        1162 => [[['_route' => 'app_mobile_hotelmobile_getpicture', '_controller' => 'App\\Controller\\Mobile\\HotelMobileController::getPicture'], ['image'], ['GET' => 0], null, false, true, null]],
        1193 => [[['_route' => 'opinion_show', '_controller' => 'App\\Controller\\OpinionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1210 => [[['_route' => 'opinion_edit', '_controller' => 'App\\Controller\\OpinionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1225 => [[['_route' => 'opinion_delete', '_controller' => 'App\\Controller\\OpinionController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1264 => [[['_route' => 'reclammation_show', '_controller' => 'App\\Controller\\ReclammationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1278 => [[['_route' => 'reclammation_edit', '_controller' => 'App\\Controller\\ReclammationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1287 => [[['_route' => 'reclammation_delete', '_controller' => 'App\\Controller\\ReclammationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1321 => [[['_route' => 'reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1330 => [[['_route' => 'reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1355 => [[['_route' => 'reponse_showClient', '_controller' => 'App\\Controller\\ReponseController::showClient'], ['id'], ['GET' => 0], null, false, true, null]],
        1380 => [[['_route' => 'reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1389 => [[['_route' => 'reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1417 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        1439 => [[['_route' => 'supp', '_controller' => 'App\\Controller\\WishlistController::remove'], ['id'], null, null, false, true, null]],
        1479 => [[['_route' => 'deletereservation', '_controller' => 'App\\Controller\\ReserveVolController::delete'], ['id'], null, null, false, true, null]],
        1498 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\VolController::delete'], ['id'], null, null, false, true, null]],
        1538 => [[['_route' => 'updatereservation', '_controller' => 'App\\Controller\\ReserveVolController::updatereservation'], ['id'], null, null, false, true, null]],
        1556 => [[['_route' => 'update', '_controller' => 'App\\Controller\\VolController::update'], ['id'], null, null, false, true, null]],
        1594 => [[['_route' => 'signalement_new', '_controller' => 'App\\Controller\\SignalementController::new'], ['idOpinion'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1614 => [[['_route' => 'signalement_show', '_controller' => 'App\\Controller\\SignalementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1631 => [[['_route' => 'signalement_edit', '_controller' => 'App\\Controller\\SignalementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1646 => [[['_route' => 'signalement_delete', '_controller' => 'App\\Controller\\SignalementController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1671 => [
            [['_route' => 'add', '_controller' => 'App\\Controller\\WishlistController::add'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
