import NotFound from './components/NotFound';
import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from "./components/Illustrations";
import Wallpapers from "./components/Wallpapers";

/**
 * Asyncronous javascript file fetch only when this component is used. Useful for those packages that
 * dont need to be present on the entire app, but only on certain pages. for those that need to be used for
 * entire site, bundle with webpack into vendor.
 */
//let LoadersAndAnimations = () => import(/* webpackChunkName: "loaders" */"./components/LoadersAndAnimations");
import LoadersAndAnimations from "./components/LoadersAndAnimations";

export default {

	mode: 'history', //Use HTML5 History api (as oppsed to hashes in the url)

	linkActiveClass: 'font-bold', //Class to apply to active link on the global scale. (as opposed to applying to each link in app.blade.php)

	routes: [
		//404
		{
			path: '*',
			component: NotFound
		},

		//The Brand Section ----------------------------------------------------
		{
			path: '/',
			component: Logo
		},
		{
			path: '/logo-symbol',
			component: LogoSymbol,
			name: 'logo-symbol'
		},
		{
			path: '/colors',
			component: Colors
		},
		{
			path: '/typography',
			component: Typography
		},

		//The Doodles Section --------------------------------------------------
		{
			path: '/Mascot',
			component: Mascot
		},
		{
			path: '/illustrations',
			component: Illustrations
		},
		{
			path: '/loaders-and-animations',
			component: LoadersAndAnimations
		},
		{
			path: '/wallpapers',
			component: Wallpapers
		},

	]
}