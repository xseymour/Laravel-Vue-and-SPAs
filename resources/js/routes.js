import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from "./components/Illustrations";
import LoadersAndAnimations from "./components/LoadersAndAnimations";
import Wallpapers from "./components/Wallpapers";
export default {

	mode: 'history', //Use HTML5 History api (as oppsed to hashes in the url)

	linkActiveClass: 'font-bold', //Class to apply to active link on the global scale. (as opposed to applying to each link in app.blade.php)

	routes: [
		//The Brand Section
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

		//The Doodles Section
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