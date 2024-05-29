@extends('templates.navbar')

@section('container')
    <!-- Pharmacy Section Start  -->
    <section class="pharmacy" id="pharmacy">
      <h1 class="heading" style="margin-top: 8rem;">
        <span style="color: #205b48">Victoria </span>Pharmacy
      </h1>

      <div class="description">
        <p>
          Welcome to our pharmacy at Victoria Hospital. We are committed to
          providing comprehensive <br> pharmaceutical services to our patients 
          and community. Our pharmacy carries a wide <br> range of medications 
          and healthcare products to meet your needs. 
        </p>
      </div>

      <div class="search-container">
        <h1 class="heading">pharmacy's <span>medicines</span></h1>
        <h2 class="subheading">"Find Information About Your Medicines"</h2>
        <form action="#" method="GET">
          <input
            type="text"
            id="searchInput"
            placeholder="Search by category or name"
            name="search"
          />
          <button type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>

      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Category Medicines</th>
              <th>Name Medicines</th>
              <th>Price Medicines</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody id="tableBody">
            <!-- Baris-baris tabel -->
            <tr>
              <td>Antihistamine</td>
              <td>Cetirizine HCL 10 Mg contains 50 Tablets</td>
              <td>IDR 22,000</td>
              <td>
                an antihistamine used to relieve allergy symptoms such as watery
                eyes, runny nose, itching eyes/nose, and sneezing. It is also
                used to treat itching and swelling caused by chronic urticaria
                (hives). Cetirizine works by blocking a certain natural
                substance (histamine) that your body makes during an allergic
                reaction.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>Loratadine 10 Mg contains 10 Tablets</td>
              <td>IDR 4,000</td>
              <td>
                an antihistamine that provides relief from allergy symptoms such
                as runny nose, sneezing, itchy or watery eyes, and itchy throat
                or nose. It is also effective in treating itching and redness
                caused by chronic skin reactions such as hives. Loratadine is
                known for its non-drowsy formula, making it a convenient option
                for daytime use.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>
                Levocetirizine Dihydrochloride Interbat 5 Mg Strip 10 Tablets
              </td>
              <td>IDR 135,000</td>
              <td>
                an effective antihistamine used to alleviate symptoms of
                allergic rhinitis (hay fever) such as sneezing, runny nose, and
                itchy or watery eyes. It is also beneficial in treating symptoms
                of chronic idiopathic urticaria (hives), including itching and
                rash. Levocetirizine is known for its rapid onset of action and
                long-lasting relief, typically providing symptom relief for 24
                hours.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>Fexofenadine HCL 180 Mg contains 10 Tablets</td>
              <td>IDR 138,000</td>
              <td>
                a potent antihistamine used to relieve symptoms associated with
                seasonal allergic rhinitis (hay fever) such as runny nose,
                sneezing, itchy or watery eyes, and itchy throat or nose. It is
                also effective in treating chronic idiopathic urticaria (hives),
                reducing symptoms like itching and rashes. Fexofenadine is known
                for its non-drowsy formula, allowing you to maintain your daily
                activities without sedation.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>Desloratadine 5 Mg contains 10 Tablets</td>
              <td>IDR 32,000</td>
              <td>
                a long-acting antihistamine that provides effective relief from
                allergy symptoms such as runny nose, sneezing, itchy or watery
                eyes, and itchy throat. It is also used to treat chronic
                idiopathic urticaria (hives), alleviating itching and reducing
                the appearance of hives. Desloratadine is known for its
                non-drowsy formula, allowing for daily use without affecting
                alertness or concentration.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>Olopatadine Lergio eye drops 0.1% 5 ML</td>
              <td>IDR 104,000</td>
              <td>
                an antihistamine solution used to treat the symptoms of allergic
                conjunctivitis (eye allergies). It effectively alleviates eye
                itching, redness, and swelling caused by allergens such as
                pollen, dust, and pet dander. Olopatadine works by inhibiting
                the action of histamine, a substance in the body that triggers
                allergic reactions, providing quick and long-lasting relief.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>
                Azelastine Dymista Nasal Spray Suspension 137/50 Mcg - 23 Ml
              </td>
              <td>IDR 696,000</td>
              <td>
                to provide effective relief from the symptoms of allergic
                rhinitis, including nasal congestion, sneezing, runny nose, and
                itchy or watery eyes. This dual-action formula leverages the
                antihistamine properties of Azelastine and the anti-inflammatory
                effects of Fluticasone, offering rapid and long-lasting relief
                from both seasonal and perennial allergies.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>Bepotastine Talion 10 Mg contains 10 Tablets</td>
              <td>IDR 65,000</td>
              <td>
                an antihistamine used to relieve symptoms of allergic conditions
                such as hay fever (allergic rhinitis) and chronic urticaria
                (hives). It effectively reduces symptoms like sneezing, runny
                nose, itchy or watery eyes, and itching caused by hives.
                Bepotastine works by blocking the action of histamine, a
                substance in the body that causes allergic symptoms, providing
                rapid and long-lasting relief.
              </td>
            </tr>
            <tr>
              <td>Antihistamine</td>
              <td>Pemirolast Potassium Alegysal Eye Drops 0.1%</td>
              <td>IDR 130,000</td>
              <td>
                an antihistamine solution used to alleviate symptoms of allergic
                conjunctivitis, such as itching, redness, and swelling of the
                eyes. Pemirolast works by inhibiting the release of histamine
                and other inflammatory substances, providing fast and effective
                relief from allergic eye symptoms.
              </td>
            </tr>
            <tr>
              <td>Simple non-opioid analgesics</td>
              <td>Ibuprofen 400 Mg Strip 10 Tablets</td>
              <td>IDR 6,000</td>
              <td>
                a nonsteroidal anti-inflammatory drug (NSAID) that helps to
                reduce fever and treat pain or inflammation caused by various
                conditions such as headache, toothache, back pain, arthritis,
                menstrual cramps, or minor injuries. Ibuprofen works by blocking
                the production of certain natural substances in your body that
                cause inflammation, providing effective and fast relief.
              </td>
            </tr>
            <tr>
              <td>Simple non-opioid analgesics</td>
              <td>Aspirin Cardio 100 Mg Contains 10 Tablets</td>
              <td>IDR 25,000</td>
              <td>
                a low-dose aspirin (acetylsalicylic acid) used to reduce the
                risk of heart attack and stroke in individuals with
                cardiovascular conditions. It works by inhibiting the
                aggregation of platelets, thus preventing the formation of blood
                clots that can lead to heart attacks or strokes. This medication
                is typically prescribed for long-term use in patients with a
                history of heart disease or those at high risk of cardiovascular
                events.
              </td>
            </tr>
            <tr>
              <td>Simple non-opioid analgesics</td>
              <td>Naproxen Alif Strip 10 Tablets</td>
              <td>IDR 240,000</td>
              <td>
                a nonsteroidal anti-inflammatory drug (NSAID) used to relieve
                pain and inflammation associated with various conditions such as
                arthritis, muscle aches, back pain, menstrual cramps, and minor
                injuries. Naproxen works by reducing hormones that cause
                inflammation and pain in the body, providing effective and
                long-lasting relief.
              </td>
            </tr>
            <tr>
              <td>Simple non-opioid analgesics</td>
              <td>DDiklofenak Prostanac 50 Mg contains 10 tablets</td>
              <td>IDR 5,000</td>
              <td>
                a nonsteroidal anti-inflammatory drug (NSAID) used to treat pain
                and inflammation caused by various conditions such as arthritis,
                muscle pain, back pain, dental pain, and menstrual cramps.
                Diclofenac works by reducing substances in the body that cause
                inflammation and pain, providing effective and quick relief.
              </td>
            </tr>
            <tr>
              <td>Simple non-opioid analgesics</td>
              <td>Etodolac Lonene 200 Mg Box contains 60 Capsules</td>
              <td>IDR 250,000</td>
              <td>
                a nonsteroidal anti-inflammatory drug (NSAID) used to alleviate
                pain and inflammation associated with conditions such as
                osteoarthritis, rheumatoid arthritis, and other musculoskeletal
                disorders. It is also effective for managing acute pain from
                minor injuries, dental procedures, and post-operative pain.
                Etodolac works by reducing hormones that cause inflammation and
                pain in the body, providing long-lasting relief.
              </td>
            </tr>
            <tr>
              <td>Simple non-opioid analgesics</td>
              <td>Nabumetone Goflex 500 Mg Box Contains 30 Tablets</td>
              <td>IRD 407,000</td>
              <td>
                a nonsteroidal anti-inflammatory drug (NSAID) used to relieve
                pain and inflammation associated with conditions such as
                osteoarthritis and rheumatoid arthritis. Nabumetone works by
                reducing hormones that cause inflammation and pain in the body,
                providing effective and long-lasting relief.
              </td>
            </tr>
            <tr>
              <td>Compound analgesics</td>
              <td>Paracetamol Novapharin 500 Mg Box Contains 100 Caplets</td>
              <td>IDR 32,000</td>
              <td>
                a widely-used analgesic (pain reliever) and antipyretic (fever
                reducer). It is effective in relieving mild to moderate pain,
                including headaches, toothaches, menstrual cramps, muscle aches,
                and pain associated with arthritis. Paracetamol also helps
                reduce fever. It works by inhibiting the production of
                prostaglandins in the brain, which are chemicals that cause pain
                and fever.
              </td>
            </tr>
            <tr>
              <td>Compound analgesics</td>
              <td>Aspirin Cardio 100 Mg Box Contains 30 Tablets</td>
              <td>IDR 67,500</td>
              <td>
                a low-dose aspirin (acetylsalicylic acid) specifically
                formulated to help prevent heart attacks and strokes in
                individuals with cardiovascular conditions. It works by
                inhibiting platelet aggregation, thereby reducing the formation
                of blood clots that can lead to heart attacks or strokes. This
                medication is commonly prescribed for long-term use in patients
                with a history of heart disease or those at high risk of
                cardiovascular events.
              </td>
            </tr>
            <tr>
              <td>Compound analgesics</td>
              <td>Codiene Phosphate Hemihydrate 10 Mg Contains 10 Tablets</td>
              <td>IDR 20,500</td>
              <td>
                an opioid pain medication used to treat mild to moderate pain.
                It is also used to alleviate cough and to provide relief from
                symptoms associated with respiratory conditions such as the
                common cold or flu. Codeine works by changing the way the brain
                and nervous system respond to pain and by reducing the urge to
                cough.
              </td>
            </tr>
            <tr>
              <td>Cough Medicine</td>
              <td>Antitusif Mezinex Syrup 60 Ml</td>
              <td>IDR 7,900</td>
              <td>
                a cough suppressant formulated to provide relief from dry,
                non-productive coughs. This syrup helps to calm the cough
                reflex, making it easier to manage persistent coughs that
                disrupt daily activities and sleep. It also soothes throat
                irritation associated with coughing.
              </td>
            </tr>
            <tr>
              <td>Cough Medicine</td>
              <td>Ekspektoran Triaminic Syrup Lemon</td>
              <td>IDR 87,500</td>
              <td>
                designed to provide relief from chest congestion and to help
                loosen and thin mucus, making it easier to cough up. The
                pleasant lemon flavor makes it easier for both children and
                adults to take. This syrup is effective in treating symptoms of
                colds, bronchitis, and other respiratory conditions that cause
                mucus buildup.
              </td>
            </tr>
            <tr>
              <td>Cough Medicine</td>
              <td>Mucolytic Mucohexin Hydrochloride Syrup 4 Mg</td>
              <td>IDR 27,000</td>
              <td>
                formulated to help break down and thin mucus in the airways,
                making it easier to cough up and clear from the respiratory
                tract. This syrup is effective in relieving chest congestion and
                improving breathing in conditions such as bronchitis, chronic
                obstructive pulmonary disease (COPD), and other respiratory
                tract infections. Usage:
              </td>
            </tr>
            <tr>
              <td>Antasida</td>
              <td>Antasida Doen Triman Bottle Contains 100 Tablet</td>
              <td>IDR 10,000</td>
              <td>
                formulated to provide fast and effective relief from heartburn,
                acid indigestion, and upset stomach. This antacid works by
                neutralizing excess stomach acid, providing soothing relief from
                discomfort and promoting digestive comfort.
              </td>
            </tr>
            <tr>
              <td>Antasida</td>
              <td>Antasida Doen Erela Suspension Syrup 60 Ml</td>
              <td>IDR 6,000</td>
              <td>
                designed to provide rapid relief from heartburn, acid
                indigestion, and stomach upset. This liquid antacid works by
                neutralizing excess stomach acid, offering quick and soothing
                relief from discomfort. The syrup form is easy to swallow and
                ideal for those who have difficulty with tablets.
              </td>
            </tr>
            <tr>
              <td>Antihypertensive</td>
              <td>Amlodipine Kalbe 10 Mg 5 Strip/10 Tablets</td>
              <td>IDR 27,500</td>
              <td>
                an antihypertensive medication used to treat high blood pressure
                (hypertension) and certain types of chest pain (angina). It
                belongs to a class of drugs known as calcium channel blockers,
                which work by relaxing blood vessels, thus improving blood flow
                and reducing the workload on the heart.
              </td>
            </tr>
            <tr>
              <td>Antihypertensive</td>
              <td>Nifedipine Ogb Dexa Medica 10 Mg Box Contains 100 Tablets</td>
              <td>IDR 20,000</td>
              <td>
                a calcium channel blocker used to treat high blood pressure
                (hypertension) and chest pain (angina). It works by relaxing
                blood vessels, allowing the heart to pump more efficiently and
                improving blood flow to the heart muscle.
              </td>
            </tr>

            <!-- Dan seterusnya -->
          </tbody>
        </table>
      </div>

      <div class="pagination">
        <button id="prevPage">Prev</button>
        <button class="page">1</button>
        <button class="page">2</button>
        <!-- Button for page 3 and beyond will be dynamically added -->
        <button id="nextPage">Next</button>
      </div>
    </section>
    <!-- Pharmacy Section End  -->
@endsection