
import { Avatar, Dropdown, Navbar } from 'flowbite-react';
// import { Link } from 'react-router-dom';
// import logo from '../assets/AstroWeb.png'

function NavHead() {
    return (
        <Navbar fluid rounded>
      <Navbar.Brand href="/">
        {/* <img src={logo} className="rounded mr-3 h-6 sm:h-9" alt="Flowbite React Logo" /> */}
        <span className="self-center whitespace-nowrap font-bold dark:text-white text-purple-600 text-4xl">TaskHut</span>
      </Navbar.Brand>
      
   

      <div className="flex md:order-2">
        <Dropdown
          arrowIcon={false}
          inline
          label={
            <Avatar alt="User settings" img="https://avatars.githubusercontent.com/u/69119769?v=4" rounded />
          }
        >
          <Dropdown.Header>
            <span className="block text-sm">Abid Rahman Shafi</span>
            <span className="block truncate text-sm font-medium">ashafio@outlook.com</span>
          </Dropdown.Header>
          <Dropdown.Item>Dashboard</Dropdown.Item>
          <Dropdown.Item>Settings</Dropdown.Item>
          <Dropdown.Item>Earnings</Dropdown.Item>
          <Dropdown.Divider />
          <Dropdown.Item>Sign out</Dropdown.Item>
        </Dropdown>
        <Navbar.Toggle />
      </div>



      <Navbar.Collapse>
        <Navbar.Link href="/">Home</Navbar.Link>
        <Navbar.Link href="/about">About</Navbar.Link>
        <Navbar.Link href="/career">Career</Navbar.Link>
        <Navbar.Link href="/pricing">Pricing</Navbar.Link>
        <Navbar.Link href="/contact">Contact</Navbar.Link> 
                
                <div>
                <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold ml-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Login
                </button>
                <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold ml-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Get Started
                </button>
                </div>
                
      </Navbar.Collapse>
                
    </Navbar>
    );
}

export default NavHead;