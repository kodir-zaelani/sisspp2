<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\Permission;
use App\Policies\RolePolicy;
use App\Policies\PermissionPolicy;
use Illuminate\Support\HtmlString;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;

class AppServiceProvider extends ServiceProvider
{
    /**
    * Register any application services.
    */
    public function register(): void
    {
        //
    }

    /**
    * Bootstrap any application services.
    */
    public function boot(): void
    {
        Model::unguard(); // agar tidak perlu tuliskan guarded/fillable di model
        //
        Gate::policy(Role::class, RolePolicy::class);
        Gate::policy(Permission::class, PermissionPolicy::class);

        FilamentView::registerRenderHook(
            PanelsRenderHook::SCRIPTS_AFTER,
            fn (): string => new HtmlString('
        <script>document.addEventListener("scroll-to-top", () => window.scrollTo(0, 0))</script>
            '),
        );
    }
}
