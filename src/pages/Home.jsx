import post1 from '../assets/icons/post 1.png'
import hire1 from '../assets/icons/hire 1.png'
import work1 from '../assets/icons/work 1.png'
import payment1 from '../assets/icons/payment 1.png'
import credibility from '../assets/icons/credibility.png'
import security from '../assets/icons/security.png'
import support from '../assets/icons/support.png'
import value from '../assets/icons/value.png'

import why_choose_us from '../assets/images/why_choose_1.jpg'
import member1 from '../assets/images/member1.png'
import member2 from '../assets/images/member2.png'
import member3 from '../assets/images/member3.png'
import member4 from '../assets/images/member4.png'
import banner from '../assets/images/banner_updated 12.png'




function Home() {
    return (
        <>
            
          <div className="hero min-h-screen bg-[url('.../assets/images/cover_3.jpg')] bg-teal-950">
            <div className="hero-overlay bg-opacity-50"></div>
            <div className="flex flex-col lg:flex-row-reverse hero-content text-center text-neutral-content">
              <div>
                <img className="mt-10" src={banner} alt=""/>
              </div>
              <div className=" text-white text-center lg:text-left">
                <h1 className="mb-5 text-3xl lg:text-6xl font-bold text-center mt-12 p-6">Find great work</h1>
                <p className="mb-5 text-xs lg:text-lg text-center mt-12">Meet clients you’re excited to work with and take
                  your career or business to new heights.</p>
    
                  <div className='flex d-flex shadow-md rounded px-8 pt-6 pb-8 mb-4 ml-12'>
                  <input className="shadow appearance-none border rounded w-full py-2 px-3 
                  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                  id="query" type="text" placeholder="Search anything"></input>

                <button className="bg-blue-500 hover:bg-blue-700 text-white font-bold ml-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Search
                </button>

                  </div>



              </div>
            </div>
          </div>
 



    <main className="container mx-auto">
        <section className="my-24">
  <div>
    <h1 className="text-center font-bold text-xl lg:text-4xl mb-7">It is Easy to Get Work Done on <span className="text-[#4338CA]">Task</span>Hut</h1>
  </div>

  <div className="flex flex-col lg:flex-row">
    <div className="card w-96 bg-base-100 ">
      <figure className="px-10 pt-10">
        <img src={post1} alt="Shoes" className="" />
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title font-bold">Post a Job</h2>
        <p>Create your free job posting and start receiving Quotes within hours.</p>

      </div>
    </div>

    <div className="card w-96 bg-base-100 ">
      <figure className="px-10 pt-10">
        <img src={hire1} alt="Shoes" className="" />
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title font-bold">Hire Freelancers</h2>
        <p>Compare the Quotes you receive and hire the best freelance professionals for the job.</p>

      </div>
    </div>

    <div className="card w-96 bg-base-100 ">
      <figure className="px-10 pt-10">
        <img src={work1} alt="Shoes" className="" />
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title font-bold">Get Work Done</h2>
        <p>Decide on how and when payments will be made and use WorkRooms to collaborate, communicate and track
          work.</p>

      </div>
    </div>

    <div className="card w-96 bg-base-100 ">
      <figure className="px-10 pt-10">
        <img src={payment1} alt="Shoes" className="" />
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title font-bold">Pay safely</h2>
        <p>Choose from multiple payment methods with SafePay payment protection.</p>

      </div>
    </div>

  </div>
</section>

<section className="my-24 bg-[#1D4ED8] text-white py-20 px-14">
  <h1 className="text-center font-semibold text-2xl lg:text-5xl mb-14 ">Why Choose Us</h1>
  <div className="flex flex-col lg:flex-row justify-around items-center gap-12">
    <div>
      <img className="rounded-xl" src={why_choose_us} alt=""/>
    </div>

    <div>
      <div>
        <div className="flex items-center gap-5">
          <div className="w-16"><img src={credibility} alt=""/></div>
          <div>
            <h1 className="text-xl font-medium">Credibility</h1> 
            <p className="mb-5">We verify Freelancers, publish their feedback scores and All-Time Transaction Data to help you identify
              time-tested professionals across the globe.</p>
          </div>
        </div>
        <div className="flex items-center gap-5">
          <div className="w-14"><img src={security} alt=""/></div>
          <div>
            <h1 className="text-xl font-medium">Security</h1> 
            <p className="mb-5">We offer SafePay payment protection and your choice of preferred payment method for financial peace of
              mind.</p>
          </div>
        </div>
        <div className="flex items-center gap-6">
          <div className="w-14"><img src={support}alt=""/></div>
          <div>
            <h1 className="text-xl font-medium">Support</h1> 
            <p className="mb-5">Our dedicated support team works 24/7 to resolve all of your queries over the phone or email, no matter
              where you are located.</p>
          </div>
        </div>
        <div className="flex items-center gap-4">
          <div className="w-14"><img src={value} alt=""/></div>
          <div>
            <h1 className="text-xl font-medium">Value</h1> 
            <p>We provide multiple Payment terms and flexible Agreements to enable you to work the way you want.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section className="my-24 ">
  <h1 className="text-center font-bold text-xl lg:text-4xl mt-32 mb-16">Find Top Talent </h1>
  <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-7">
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className=""><i className="fa-regular fa-file-code fa-2x"></i></div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Web development & design</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className="mb-2"><i className="fa-regular fa-code fa-2xl"></i></div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Programming & Software</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className="mb-2"><i className="fa-brands fa-android fa-2xl"></i> </div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Apps & Mobile</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className="mb-2"><i className="fa-solid fa-database fa-2xl"></i></div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Database design & Administration</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className="mb-2"><i className="fa-regular fa-swatchbook fa-2xl"></i></div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Design & Creative</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className="mb-2"><i className="fa-solid fa-network-wired fa-2xl"></i></div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Networking & Hardware</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className="mb-2"><i className="fa-solid fa-hotel fa-2xl"></i></div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Engineering & Architecture</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      <figure className="px-10 pt-10">
        <div className="mb-2"><i className="fa-solid fa-magnifying-glass-chart fa-2xl"></i></div>
      </figure>
      <div className="card-body items-center text-center">
        <h2 className="card-title"><a href="#">Degital Marketing</a></h2>
      </div>
    </div>
    <div className="card w-96 cursor-pointer bg-gray-50 hover:bg-base-200 shadow-lg">
      
      <div className="card-body items-center text-center">
        <h2 className="card-title mt-8"><a href="#">Others</a></h2>
      </div>
    </div>



  </div>
</section>

<section className="my-24">
  <h1 className="text-center font-bold text-2xl lg:text-4xl mb-16">What client say</h1>

  <div className="carousel w-full">
    <div id="slide1" className="carousel-item relative w-full">
      <div>
        <div className="mx-24">
          <p>At SOLACE Engineers, we provide engineering solutions and other services on various freelancing
            platforms. Among them all, TaskHut is the best and our first choice to invite clients outside of
            freelancing platforms. Great customer support, low fee, easy to understand interface and solid payment
            protection with the SafePay system make working a delight on TaskHut! TaskHut really helped our business
            flourish…</p>
        </div>
        <div className="flex flex-row justify-center items-center mt-5">
          <div>
            <img className="w-1/2" src={member1} alt=""/>
          </div>
          <div>
            <h2 className="text-xl font-semibold">
              Solace Engineers Inc.</h2>
            <h4>Engineering Firm</h4>
          </div>
        </div>
      </div>

      <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide4" className="btn btn-circle">❮</a>
        <a href="#slide2" className="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide2" className="carousel-item relative w-full">
      <div>
        <div className="mx-24">
          <p>TaskHut.com is my favorite freelance platform. I love the functionality, the support and the strong
            workflow element, particularly the SafePay feature which makes the transfer of funds so easy. I love the
            integration with PayPal and the ability to amend agreements, with all steps communicated to and actioned
            by both sides. Of all the freelance platforms I have used, TaskHut is by far my favorite.</p>
        </div>
        <div className="flex flex-row justify-center items-center mt-5">
          <div>
            <img className="w-1/2" src={member2} alt=""/>
          </div>
          <div>
            <h2 className="text-xl font-semibold">
              Isabel Austin</h2>
            <h4>Writer, Editor, Proofreader</h4>
          </div>
        </div>
      </div>

      <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1" className="btn btn-circle">❮</a>
        <a href="#slide3" className="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide3" className="carousel-item relative w-full">
      <div>
        <div className="mx-24">
          <p>In our company, we do ongoing research with our target audience. This includes 30-45 minute phone
            interviews. It was difficult to conduct the interview, really listen, and ask good follow up questions
            while
            trying to capture it all in thorough hand-written notes. One of our writers suggested using TaskHut to
            find
            someone to transcribe these interviews...The person I hired is the one I’ve stuck with for nearly two
            years
            now – she is fast, accurate, and affordable. I’d never have found her on my own, given that I live in
            Utah
            and she lives in South Africa. I could never have arranged such an effective solution to my on-going
            need
            for transcripts without TaskHut. It’s been a life-saver.</p>
        </div>
        <div className="flex flex-row justify-center items-center mt-5">
          <div>
            <img className="w-1/2" src={member3} alt=""/>
          </div>
          <div>
            <h2 className="text-xl font-semibold">David Hussy</h2>
            <h4>IT solutions firm</h4>
          </div>
        </div>
      </div>

      <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide2" className="btn btn-circle">❮</a>
        <a href="#slide4" className="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide4" className="carousel-item relative w-full">
      <div>
        <div className="mx-24">
          <p>TaskHut is not only a marketplace but a place to do business. We meet new clients and more often than
            not
            establish long-term business relationships, all through TaskHut. The flexibility in how projects can be
            structured and the many payment options available allows us to work with clients in a way they feel most
            comfortable. We have been with TaskHut for over 10 years and hope to be here much longer.</p>
        </div>
        <div className="flex flex-row justify-center items-center mt-5">
          <div>
            <img className="w-1/2" src={member4} alt=""/>
          </div>
          <div>
            <h2 className="text-xl font-semibold">DScopic Software</h2>
            <h4>IT solutions firm</h4>
          </div>
        </div>
      </div>

      <div className="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide3" className="btn btn-circle">❮</a>
        <a href="#slide1" className="btn btn-circle">❯</a>
      </div>
    </div>


  </div>
</section>
</main>  
        </>
    );
}

export default Home;