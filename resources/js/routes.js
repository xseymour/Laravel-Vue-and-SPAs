import Home from './components/Home';
import About from './components/About';
export default {
	mode: 'history', //Use HTML5 History api (as oppsed to hashes in the url)

	routes: [
		{
			path: '/',
			component: Home	
		},
		{
			path: '/about',
			component: About,
			name: 'about'
		},
	]
}