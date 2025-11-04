<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Facades\Filament;
use App\Filament\Auth\CustomLogin;
use Filament\Support\Colors\Color;
use Filament\Pages\Auth\EditProfile;
use Filament\Navigation\UserMenuItem;
use Filament\Navigation\NavigationGroup;
use App\Filament\Resources\AgamaResource;
use Filament\Http\Middleware\Authenticate;
use App\Filament\Resources\TahunajaranResource;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Althinect\FilamentSpatieRolesPermissions\FilamentSpatieRolesPermissionsPlugin;

class ManajemenPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
        ->default()
        ->id('manajemen')
        ->path('manajemen')
        ->login(CustomLogin::class)
        ->profile(EditProfile::class)
        ->colors([
            // 'primary' => Color::Amber,
            'danger' => Color::Rose,
            'gray' => Color::Gray,
            'info' => Color::Blue,
            'primary' => Color::Indigo,
            'success' => Color::Emerald,
            'warning' => Color::Orange,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
                ])
                ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
                ->widgets([
                    Widgets\AccountWidget::class,
                    // Widgets\FilamentInfoWidget::class,
                    ])
                    ->middleware([
                        EncryptCookies::class,
                        AddQueuedCookiesToResponse::class,
                        StartSession::class,
                        AuthenticateSession::class,
                        ShareErrorsFromSession::class,
                        VerifyCsrfToken::class,
                        SubstituteBindings::class,
                        DisableBladeIconComponents::class,
                        DispatchServingFilamentEvent::class,
                        ])
                        ->authMiddleware([
                            Authenticate::class,
                            ])
                            ->plugin(FilamentSpatieRolesPermissionsPlugin::make())
                            ->navigationGroups([
                                NavigationGroup::make()
                                ->label('Lembaga')
                                ->icon('heroicon-o-building-office-2'),
                                NavigationGroup::make()
                                ->label('Kepegawaian')
                                ->icon('heroicon-o-circle-stack'),
                                NavigationGroup::make()
                                ->label('Master Data')
                                ->icon('heroicon-o-circle-stack'),
                                NavigationGroup::make()
                                ->label('Auths and Configurations')
                                ->icon('heroicon-o-user-group'),
                                NavigationGroup::make()
                                ->label('Roles and Permissions')
                                ->icon('heroicon-s-cog-6-tooth')
                                ->collapsed(),
                                NavigationGroup::make()
                                ->label('Referensi')
                                ->icon('heroicon-o-folder-arrow-down'),
                                ])
                                // ->sidebarFullyCollapsibleOnDesktop()
                                ->sidebarCollapsibleOnDesktop()
                                ->databaseNotifications()
                                ->collapsibleNavigationGroups(true);
                            }

                            public function boot(): void
                            {
                                Filament::serving( function () {
                                    Filament::registerUserMenuItems([
                                        UserMenuItem::make()
                                        ->label('Agama')
                                        ->url(AgamaResource::getUrl())
                                        ->icon('heroicon-s-cog'),
                                    ]);
                                });
                            }
                        }