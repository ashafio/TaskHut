import { Button, Card, Checkbox, Label, TextInput } from 'flowbite-react';
import image from '../assets/AstroWeb.png'
function Login() {
    return (
    <div className='flex d-flex justify-evenly mt-12 sm:flex-none md:flex-none'>

        <div>
        <Card>
      <form className="flex flex-col gap-4">
        <div>
          <div className="mb-2 block">
            <Label
              htmlFor="email1"
              value="Your email"
            />
          </div>
          <TextInput
            id="email1"
            placeholder="name@taskhut.com"
            required
            type="email"
          />
        </div>
        <div>
          <div className="mb-2 block">
            <Label
              htmlFor="password1"
              value="Your password"
            />
          </div>
          <TextInput
            id="password1"
            placeholder='password'
            required
            type="password"
          />
        </div>
        
        <Button type="submit">
          Submit
        </Button>
      </form>
        </Card>
        </div>

        <div>
            <h1 className='font-bold text-4xl text-center'>Apply to jobs</h1><br />
            <h1 className='font-bold text-2xl text-center'>Earn Money</h1><br />
            <img src={image} alt="" />
        </div>

    </div>
    );
}
export default Login;
